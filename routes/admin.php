<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
Route::middleware('auth','admin')->prefix('admin') -> name('admin.') -> group (function(){
    Route::get('index',[AdminController::class,'index'])->name('dashboard');
});