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

Route::get('/form', [
    App\Http\Controllers\LoginController::class, 
    'form'
])->name('form');