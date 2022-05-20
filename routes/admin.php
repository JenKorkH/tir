<?php

use App\Http\Controllers\Admin\ACategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AGunController;
use App\Http\Controllers\Admin\ABrandController;
use App\Http\Controllers\Admin\AuthController;


Route::middleware('guest:admin')->group(function (){
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login_process', [AuthController::class, 'login'])->name('login_process');
});

Route::middleware('auth:admin')->group(function (){
    Route::get('/', [AuthController::class, 'index'])->name('index');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::resource('guns', AGunController::class);
    Route::resource('brands', ABrandController::class);
    Route::resource('category', ACategoryController::class);
    Route::resource('instructor', AInstructorController::class);
});
