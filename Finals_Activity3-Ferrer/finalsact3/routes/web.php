<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

Route::resource('students', StudentController::class);
Route::put('/students/{student}', [StudentController::class, 'update'])->name('students.update');
Route::get('/students', [StudentController::class, 'index'])->name('students.index');