<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home/create', [HomeController::class, 'create'])->name('home.create');
// Route::post('/home/store', [HomeController::class, 'store'])->name('home.store');
// Route::post('/home/show', [HomeController::class, 'show']);
// Route::post('/home/update', [HomeController::class, 'update']);
// Route::post('/home/delete', [HomeController::class, 'delete']);


Route::resource('home', HomeController::class);