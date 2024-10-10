<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard',[DashboardController::class, 'index']);//masuk ke dalam halaman dashboard 
Route::post('/proseslogin', [AuthController::class, 'proseslogin']);
