<?php

use App\Http\Controllers\RuteController;
use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route tanpa MVC
Route::get('/rutetanpamvc', function () {
    return 'ini adalah jalan condong,Route tanpa MVC';
});

// Route Menggunakan VIEW
Route::get('/ruteview', function () {
    return view('ruteview');
});

// Rute Menggunakan View & controller
Route::get('/rutecontroller', [RuteController::class, 'menampilkanData']);


// rute menggunakan View,controller $ model
Route::get('/rutemodel', [RuteController::class, 'menampilkanDataModel']);
Route::get('/biodata', [BiodataController::class, 'menampilkanBiodata']);