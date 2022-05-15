<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AGunController;
use App\Http\Controllers\Admin\AuthController;


Route::middleware('guest:admin')->group(function (){
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login_process', [AuthController::class, 'login'])->name('login_process');
});

Route::middleware('auth:admin')->group(function (){
    Route::get('index', [AuthController::class, 'index'])->name('index');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('guns', AGunController::class);

    Route::get('index/guns', [AGunController::class, 'index'])->name('guns');

    Route::get('index/guns/create', [AGunController::class, 'create'])->name('guns');
    Route::post('index/guns/gun-add_process', [AGunController::class, 'create'])->name('gun_process');
});
