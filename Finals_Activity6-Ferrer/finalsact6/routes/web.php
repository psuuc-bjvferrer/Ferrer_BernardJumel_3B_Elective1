<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'getUsers'])->name('users');
Route::get('/weather/multiple', [WeatherController::class, 'getMultipleCitiesWeather'])->name('weather.multiple');
Route::get('/weather/{city?}', [WeatherController::class, 'getWeather'])->name('weather');
Route::get('/', function () {
    return view('welcome');
});
