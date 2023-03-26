<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OpenWeatherController;
use Illuminate\Support\Facades\Route;

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

//Soft-ui
//Route::group(['middleware' => 'auth'], function () {
//
//    Route::get('dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
//
//    Route::get('billing', function () {
//        return view('billing');
//    })->name('billing');
//
//    Route::get('profile', function () {
//        return view('profile');
//    })->name('profile');
//
//    Route::get('rtl', function () {
//        return view('rtl');
//    })->name('rtl');
//
//    Route::get('user-management', function () {
//        return view('laravel-examples/user-management');
//    })->name('user-management');
//
//    Route::get('tables', function () {
//        return view('tables');
//    })->name('tables');
//
//    Route::get('virtual-reality', function () {
//        return view('virtual-reality');
//    })->name('virtual-reality');
//
//    Route::get('static-sign-in', function () {
//        return view('static-sign-in');
//    })->name('sign-in');
//
//    Route::get('static-sign-up', function () {
//        return view('static-sign-up');
//    })->name('sign-up');
//
//    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);
//    Route::get('/user-profile', [InfoUserController::class, 'create']);
//    Route::post('/user-profile', [InfoUserController::class, 'store']);
//});
//

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register-page');
    Route::post('/register', [RegisteredUserController::class, 'store'])->name('register-post');
    Route::get('/login', [SessionsController::class, 'create'])->name('login-page');
    Route::post('/login', [SessionsController::class, 'store'])->name('login-post');
    Route::get('/login/forgot-password', [ResetController::class, 'create']);
    Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
    Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
    Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});
Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', function () {return view('auth.dashboard');})->name('dashboard');//CORRIGIR
    Route::get('/cultivares', function() {return view( 'auth.crops');})->name('crops');
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);
});

//Projeto

Route::get('/', [HomeController::class, 'home'])->name('index');
Route::get('/sobre', [HomeController::class, 'about'])->name('about');
Route::get('/contato', [HomeController::class, 'contact'])->name('contact');
Route::get('/galeria', [HomeController::class, 'gallery'])->name('gallery');
//Route::get('/login', [HomeController::class, 'login'])->name('login');

//APAGAR!!!
Route::get('/apiTest/{lat}/{lon}/{metrics?}', [OpenWeatherController::class, 'getResponse']);
Route::get('/teste', function() { return view('teste'); });
require __DIR__.'/auth.php';
