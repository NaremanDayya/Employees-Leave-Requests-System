<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Request as ModelsRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class EmployeesController extends Controller
{
    
    public function index()
    {
        $employee = User::where('type', 'employee')
            ->get();
        return view('admin.employees.index', compact('employee'));
    }

    public function create()
    {
        $employee = new User();
        return view('admin.employees.create', compact('employee'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required',
            'type' => 'nullable',
        ]);

        $hashedPassword = Hash::make($validated['password']);
        $type = $request->input('type', 'employee');

        $request->merge([
            'type' => $type,
            'password' => $hashedPassword,
        ]);
        $employee = User::create($request->all());
        return redirect()->route('employees.index')
            ->with('success', 'New Employee Added♥');
    }

    public function edit(User $employee)
    {
        return view('admin.employees.edit', compact('employee'));
    }


    public function update(Request $request, User $employee)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required',
            'type' => 'nullable',
        ]);
        $employee->update($validated);
        return redirect()->route('employees.index')
            ->with('success', 'Employee Updated♥');
    }
     
    public function myRequests(ModelsRequest $request)
    {
        $requests = Auth::user()->requests;

               return view('employee.requests', compact('requests'));

    }

    public function Empnotifications(Notification $notification)
    {
        $notifications = $notification->user()->get();
        return view('employee.notifications',compact('notifications'));
    }
    
    public function Admnotifications(Notification $notification)
    {
        $notifications = $notification->user()->get();
        $notifications = Notification::whereHas('user', function ($query) {
            $query->where('type', 'admin');
        })->get();
        return view('admin.notifications',compact('notifications'));
    }

    public function show(User $employee)
    {
        return view('admin.employees.show',compact('employee'));
    }

    public function manageEmployees()
    {
        return view('admin.manage_employees');
    }

    public function destroy(User $employee)
    {
        // Perform any additional checks or logic before deleting if needed
        // For example, you might want to prevent deleting certain employees

        $employee->delete();

        return redirect()->route('employees.index')
            ->with('success', "Employee $employee->name deleted successfully!");
    }
}
