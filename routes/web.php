<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\adminController;

 
Route::get('/', [adminController::class, 'index'])->name('index');
Route::get('/dashboard', [adminController::class, 'dashboard'])->name('dashboard');
Route::get('/commen_item_creation', [adminController::class, 'commen_item_creation'])->name('commen_item_creation');
Route::get('/serial_item_creation', [adminController::class, 'serial_item_creation'])->name('serial_item_creation');
Route::get('/vehicle_item_creation', [adminController::class, 'vehicle_item_creation'])->name('vehicle_item_creation');
Route::get('/category', [adminController::class, 'category'])->name('category');