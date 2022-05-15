<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\App;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\GunController;
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
Route::get('/about', [App::class, 'showAbout'])->name('about');

Route::get('/certificates', [CertificateController::class, 'showCertificates'])->name('certificates');
Route::get('/certificates/certificate', [CertificateController::class, 'showCertificate'])->name('certificate');

Route::get('/guns', [GunController::class, 'showGuns'])->name('guns');
Route::get('/guns/gun', [GunController::class, 'showGun'])->name('gun');


Route::get('/profile', [AuthController::class, 'showProfile'])->name('profile');
Route::middleware("auth")->group(function(){
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware("guest")->group(function(){
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login_process', [AuthController::class, 'login'])->name('login_process');

    Route::post('/forgot_process', [AuthController::class, 'forgot'])->name('forgot_process');
    Route::get('/forgot', [AuthController::class, 'showForgotForm'])->name('forgot');

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register_process', [AuthController::class, 'register'])->name('register_process');
});

Route::get('/sendtest', [\App\Http\Controllers\MailController::class, 'sendReset'])->name('test');


