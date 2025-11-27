<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;

//  lấy các giao diện font end
use App\Http\Controllers\Fontend\Dashboard;

// end
Route::get('/', function () {
    return view('welcome');
});

// Backend route

Route::get('/dashboard/index', [DashboardController::class, 'index']) -> name('dashboard.index');
Route::get('/admin', [AuthController::class, 'index']) -> name('auth.admin');
Route::post('/login',[AuthController::class,'login']) -> name('auth.login');
// Fontend route
Route::get('/fontend/dashboard', [Dashboard::class, 'index']) -> name('fonten.dashborad');



