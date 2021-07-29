<?php

use App\Http\Controllers\Dashboard\DashboardController;
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


Route::group(['namespace' => 'Auth'], function() {
    Route::get('/login', 'Login\SignInController@showForm')->name('login');
    Route::post('/authenticate', 'Login\SignInController@authenticateUser')->name('signin');

    Route::get('/logout', 'Logout\LogoutController@logout')->name('logout');

    Route::get('/signup', 'SignUp\SignUpController@showForm')->name('signup');
    Route::post('/register', 'SignUp\SignUpController@register')->name('register');

    Route::get('/forgot-password', 'ForgotPassword\ForgotPasswordController@showForm')->name('forgot-password');
    Route::get('/recover-password', 'ForgotPassword\ForgotPasswordController@showRecoverForm')->name('recover-password');
    Route::post('/reset-password', 'ForgotPassword\ForgotPasswordController@resetPassword')->name('reset-password');
});


Route::group(['prefix' => 'admin'], function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard'); 
});


Route::group(['prefix' => 'payment-gateway'], function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard'); 
});
