<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\App;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App::class, 'showIndex'])->name('home');
Route::get('/certificates', [App::class, 'showCertificates'])->name('certificates');
Route::get('/certificate', [App::class, 'showCertificate'])->name('certificate');
Route::get('/about', [App::class, 'showAbout'])->name('about');

Route::middleware("auth")->group(function(){
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware("guest")->group(function(){
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login_process', [AuthController::class, 'login'])->name('login_process');

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register_process', [AuthController::class, 'register'])->name('register_process');
});



