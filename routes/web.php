<?php

use App\Http\Controllers\LeaseController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Models\Lease;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/properties', [PropertyController::class, 'index']);
Route::post('/properties', [PropertyController::class, 'store'])->name('properties.store');
Route::get('/properties/{id}' , [PropertyController::class, 'show']); 


Route::get('/tenants', [TenantController::class, 'index']);
Route::post('/tenants', [TenantController::class, 'store'])->name('tenants.store');
Route::get('/tenants{id', [TenantController::class, 'shpw']);


Route::get('/leases', [LeaseController::class, 'index']);
Route::post('/leases', [LeaseController::class, 'store'])->name('leases.store');
Route::get('/leases/{id}' , [LeaseController::class, 'show']);


Route::get('/payments', [PaymentController::class, 'index']);
Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store');
Route::get('/payments/{id}', [PaymentController::class, 'show']);


Route::get('/rents', [RentController::class, 'index']);
Route::get('/units', [UnitController::class, 'index']);

// define route in view
Route::get('/dashboard', function(){
    return view('dashboard.index');
});


// route for login
Route::get('/login', function() {
    return view('login.index');
});

// route for go to watch result 

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/login', [ AuthController::class, 'store'])->name('login.store');

Route::get('/maintenances', [MaintenanceController::class, 'index']);
Route::get('/maintenances/{id}', [MaintenanceController::class, 'show']);
Route::post('/maintenances', [MaintenanceController::class, 'store'])->name('maintenances.store');

Route::get('/leases', [LeaseController::class, 'index']);
Route::post('/leases', [LeaseController::class, 'store'])->name('leases.store');
Route::get('/leases/{id}', [LeaseController::class, 'show']);

Route::post('/dashboard' , function () {
    return view('dashboard');
})->name('dashboard');