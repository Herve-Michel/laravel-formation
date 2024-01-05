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

Route::get(
    '/create-training',
    [TrainingController::class, 'create']
)->name('training.create');

Route::post(
    '/create-training',
    [TrainingController::class, 'store']
)->name('training.store');
