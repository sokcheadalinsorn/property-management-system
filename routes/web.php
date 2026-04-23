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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/properties', [PropertyController::class, 'index']);
Route::get('/units', [UnitController::class, 'index']);
Route::get('/tenants', [TenantController::class, 'index']);
Route::get('/leases', [LeaseController::class, 'index']);
Route::get('/payments', [PaymentController::class, 'index']);
Route::get('/maintenances', [MaintenanceController::class, 'index']);
Route::get('/rents', [RentController::class, 'index']);
Route::post('/properties', [PropertyController::class, 'store'])->name('properties.store');

// define route in view
Route::get('/dashboard', function(){
    return view('dashboard.index');
});

Route::get('/lease', function(){
    return view('lease.index');
});

Route::get('/payment', function(){
    return view('payment.index');
});

Route::get('/properties', function(){
    return view('property.index');
});

Route::get('/tenant', function(){
    return view('tenant.index');
});

Route::get('/maintenance', function(){
    return view('maintenance.index');
});

Route::get('/profile', function(){
    return view('profile.index');
});

// route for login
Route::get('/login', function() {
    return view('login.index');
});

// route for go to watch result 

Route::get('/', function () {
    return view('home');
});
