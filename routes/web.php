<?php

use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\LeaveTypesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('employee.request', RequestsController::class);
    Route::resource('employees', EmployeesController::class);
    Route::resource('leaveTypes', LeaveTypesController::class);
    Route::post('request/{request}/accept',[RequestsController::class,'accept'])->name('requests.accept');
    Route::post('request/{request}/reject',[RequestsController::class,'reject'])->name('requests.reject');
    Route::get('/myrequests',[EmployeesController::class,'myRequests'])->name('employee.requests');
    Route::get('/notification',[EmployeesController::class,'Empnotifications'])->name('notifications');
   
});
require __DIR__.'/auth.php';
