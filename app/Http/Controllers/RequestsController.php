<?php

namespace App\Http\Controllers;

use App\Models\LeaveType;
use App\Models\Request as ModelRequest;
use App\Models\User;
use App\Models\v;
use App\Notifications\EmployeeRequestNotification;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class RequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $employee)
    {
        $requests = ModelRequest::all();
        return view('admin.requests', compact('requests','employee'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $empRequests = new ModelRequest();
        $types = LeaveType::all();
        $empId = Auth::id();
       
        return view('employee.requests.create', compact('empRequests', 'empId', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request ,ModelRequest $req)
    {
        $request->validate([
            'notes' => 'nullable|string',
            'status' => 'nullable|in:accepted,waiting,rejected',
        ]);

        $status = $request->input('status', 'waiting');

        $request->merge([
            'status' => $status,
            'leave_type_id' => $request->input('type_id'),
        ]);
         ModelRequest::create($request->all());
        // $admins = User::where('type', 'administrator')->get(); // Adjust the condition based on your user type setup
        // Notification::send($admins, new EmployeeRequestNotification($newRequest));
        $requests = Auth::user()->requests;

        return view('employee.requests')
            ->with([
                'success'=> 'New Employee Added♥',
                'requests' => $requests,
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $employee, ModelRequest $request)
    {

        return view('employee.requests.show', compact('request', 'employee'));
    }

  
    /**
     * Show the form for editing the specified resource.
     */
    public function accept(ModelRequest $request)
    {
        $request->status = 'accepted';
        $request->save();
        return back()->with('success', 'Request Accepted♥');
    }

    /**
     * Update the specified resource in storage.
     */
    public function reject(ModelRequest $request)
    {
        $request->status = 'rejected';
        $request->save();
        return back()->with('error', 'Request Rejected!');
    }

}
