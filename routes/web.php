<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PresensiController;
use App\Models\Presensi;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
})->name('login');
Route::post('/proseslogin', [AuthController::class, 'proseslogin']);


    Route::get('/dashboard',[DashboardController::class, 'index']);//masuk ke dalam halaman dashboard 
    Route::get('/logout',[AuthController::class, 'logout']);
    Route::get('/presensi/create',[PresensiController::class, 'create']);
    




//Route::get('/login',[AuthController::class, 'login']);
