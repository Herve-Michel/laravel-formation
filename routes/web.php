<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\WeatherController;

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

Route::get(
    '/edit-training/{id}',
    [TrainingController::class, 'edit']
)->name('training.edit');

Route::put(
    '/edit-training/{id}',
    [TrainingController::class, 'update']
)->name('training.update');

Route::delete(
    '/delete-training/{id}',
    [TrainingController::class, 'destroy']
)->name('training.destroy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/weather/search', [
    WeatherController::class, 'search'
])->name('weather.search');

Route::post('/weather/cities', [
    WeatherController::class, 'cities'
])->name('weather.cities');

Route::get('/weather/{city}', [
    WeatherController::class, 'show'
])->name('weather.show');













Route::get('/image/create', [ImageController::class, 'create'])->name('image.create');
Route::post('/image/store', [ImageController::class, 'store'])->name('image.store');
