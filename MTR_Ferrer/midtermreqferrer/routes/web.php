<?php
use App\Http\Controllers\AssetController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AssetController::class, 'dashboard'])->name('dashboard');
Route::resource('assets', AssetController::class);