<?php

use Illuminate\Support\Facades\Route;

Route::get('/mandatorydeductions', [
    App\Http\Controllers\LoginController::class, 
    'mandatorydeductions'
])->name('mandatorydeductions');

Route::get('/mandatorydeductions/create', [
    App\Http\Controllers\LoginController::class, 
    'mandatorydeductions_create'
])->name('mandatorydeductions.create');

