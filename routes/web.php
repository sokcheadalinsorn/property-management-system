<?php

use App\Http\Controllers\LeaseController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/properties', [PropertyController::class, 'index']);
Route::get('/units', [UnitController::class, 'index']);
Route::get('/tenants', [TenantController::class, 'index']);
Route::get('/leases', [LeaseController::class, 'index']);
Route::get('/payments', [PaymentController::class, 'index']);
Route::get('/maintenances', [MaintenanceController::class, 'index']);


Route::get('/dashboard', function () {
    return view('dashboard.index');
});