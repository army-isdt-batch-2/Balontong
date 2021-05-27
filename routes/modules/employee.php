<?php

use Illuminate\Support\Facades\Route;

Route::get('/employees', [
    App\Http\Controllers\LoginController::class, 
    'employees'
])->name('employees');

Route::get('/employees/create', [
    App\Http\Controllers\LoginController::class, 
    'employees_create'
])->name('employees.create');
