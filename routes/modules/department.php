<?php

use Illuminate\Support\Facades\Route;

Route::get('/departments', [
    App\Http\Controllers\DepartmentController::class, 
    'departments'
])->name('departments');

Route::get('/departments/create', [
    App\Http\Controllers\DepartmentController::class, 
    'departments_create'
])->name('departments.create');

Route::post('/departments/save',[
    App\Http\Controllers\DepartmentController::class,
    'save'
])->name('departments.save');