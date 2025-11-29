<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;

//  lấy các giao diện font end
use App\Http\Controllers\Fontend\Dashboard;

// end
Route::get('/', function () {
    return view('client/pages/home');
});

// Backend route

Route::get('/dashboard/index', [DashboardController::class, 'index']) -> name('dashboard.index');

Route::post('/login',[AuthController::class,'login']) -> name('auth.login');
Route::get('/login',[AuthController::class,'loginGet']) -> name('auth.loginGet');

// Fontend route
Route::get('/fontend/dashboard',function (){
    return view('fontend/dashboard/index');
});



