<?php

namespace App\Http\Controllers;

use App\Models\LeaveType;
use Illuminate\Http\Request;

class LeaveTypesController extends Controller
{
    public function index()
    {
        $types = LeaveType::all();
        return view('admin.leaveTypes.index',compact('types'));
    }

    public function create()
    {
        $leaveType = New LeaveType();
        return view('admin.leaveTypes.create',compact('leaveType'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:leave_types,name',
            'description' => 'nullable',
        ]);
        $type = LeaveType::create($validated);
        return redirect()->route('leaveTypes.index')
        ->with('success','New Leave Type Added♥');
    }

    public function edit(LeaveType $leaveType)
    {
        return view('admin.leaveTypes.edit',compact('leaveType'));
    }

    public function update(Request $request,LeaveType $leaveType)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);     
        $leaveType->update($validated);
        return redirect()->route('leaveTypes.index')
        ->with('success',"Leave Type $leaveType->name Updated♥");
    
 }

 public function show(LeaveType $leaveType)
    {
        return view('admin.leaveTypes.show',compact('leaveType'));
    }

 public function manageLeaveTypes()
 {
     return view('admin.manage_leave_types');
 }


    public function destroy(LeaveType $leaveType)
    {

        $leaveType->delete();   
        return redirect()->route('leaveTypes.index')
        ->with('success',"Leave Type $leaveType->name Deleted!");
    
    }
}
