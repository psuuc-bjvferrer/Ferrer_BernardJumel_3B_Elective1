<?php

use App\Http\Controllers\InfoController;
use Illuminate\Support\Facades\Route;

Route::get('/info', [InfoController::class, 'showForm'])->name('form.show'); 
Route::post('/info', [InfoController::class, 'handleForm'])->name('form.submit'); 