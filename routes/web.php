<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingController;


Route::get('/', function () {
    return view('welcome');
});

Route::get(
    '/training',
    [TrainingController::class, 'index']
)->name('training.index');
