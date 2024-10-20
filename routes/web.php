<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\ProfileController;
use App\Models\Presensi;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
///Route::post('/proseslogin', [AuthController::class, 'proseslogin']);


    //Route::get('/dashboard',[DashboardController::class, 'index']);//masuk ke dalam halaman dashboard 
    //Route::get('/logout',[AuthController::class, 'logout']);
    //Route::get('/presensi/create',[PresensiController::class, 'create']);
    //Route::get('/profile/create',[ProfileController::class, 'create']);

//Route::get('/login',[AuthController::class, 'login']);

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//guestbook.test/admin
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']) -> name('home');

//guestbook.test/admin/dashboard -> route ('admin.dashboard')
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

