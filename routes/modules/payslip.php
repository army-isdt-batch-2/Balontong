<?php

use Illuminate\Support\Facades\Route;

Route::get('/payslips', [
    App\Http\Controllers\LoginController::class, 
    'payslips'
])->name('payslips');

Route::get('/payslips/create', [
    App\Http\Controllers\LoginController::class, 
    'payslips_create'
])->name('payslips.create');

Route::get('/payslips/view', [
    App\Http\Controllers\LoginController::class, 
    'payslips_view'
])->name('payslips.view');

