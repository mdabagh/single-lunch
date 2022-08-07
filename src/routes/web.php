<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [LandingController::class, 'index']);
Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::get('/google-login', [LoginController::class, 'redirectToProvider'])->name('google-login');
Route::get('/callback', [LoginController::class, 'handleProviderCallback']);