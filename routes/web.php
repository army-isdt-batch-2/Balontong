<?php

use Illuminate\Support\Facades\Route;



Route::get('/login', [
    App\Http\Controllers\LoginController::class, 
    'index'
])->name('login');


Route::get('/table', [
    App\Http\Controllers\LoginController::class, 
    'table'
])->name('table');


Route::get('/layout', [
    App\Http\Controllers\LoginController::class, 
    'layout'
])->name('layout');


Route::get('/departments', [
    App\Http\Controllers\LoginController::class, 
    'departments'
])->name('departments');


Route::get('/employees', [
    App\Http\Controllers\LoginController::class, 
    'employees'
])->name('employees');


Route::get('/loans', [
    App\Http\Controllers\LoginController::class, 
    'loans'
])->name('loans');


Route::get('/leaves', [
    App\Http\Controllers\LoginController::class, 
    'leaves'
])->name('leaves');


Route::get('/mandatorydeductions', [
    App\Http\Controllers\LoginController::class, 
    'mandatorydeductions'
])->name('mandatorydeductions');


Route::get('/timekeeping', [
    App\Http\Controllers\LoginController::class, 
    'timekeeping'
])->name('timekeeping');


Route::get('/payslips', [
    App\Http\Controllers\LoginController::class, 
    'payslips'
])->name('payslips');


Route::get('/form', [
    App\Http\Controllers\LoginController::class, 
    'form'
])->name('form');


Route::get('/departments/create', [
    App\Http\Controllers\LoginController::class, 
    'departments_create'
])->name('departments.create');


Route::get('/employees/create', [
    App\Http\Controllers\LoginController::class, 
    'employees_create'
])->name('employees.create');


Route::get('/leaves/create', [
    App\Http\Controllers\LoginController::class, 
    'leaves_create'
])->name('leaves.create');


Route::get('/loans/create', [
    App\Http\Controllers\LoginController::class, 
    'loans_create'
])->name('loans.create');


Route::get('/mandatorydeductions/create', [
    App\Http\Controllers\LoginController::class, 
    'mandatorydeductions_create'
])->name('mandatorydeductions.create');


Route::get('/payslips/create', [
    App\Http\Controllers\LoginController::class, 
    'payslips_create'
])->name('payslips.create');


Route::get('/timekeeping/create', [
    App\Http\Controllers\LoginController::class, 
    'timekeeping_create'
])->name('timekeeping.create');

Route::get('/payslips/view', [
    App\Http\Controllers\LoginController::class, 
    'payslips_view'
])->name('payslips.view');


Route::get('/timekeeping/view', [
    App\Http\Controllers\LoginController::class, 
    'timekeeping_view'
])->name('timekeeping.view');


Route::post('/departments/save',[
    App\Http\Controllers\LoginController::class,
    'save'
])->name('departments.save');