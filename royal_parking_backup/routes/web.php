<?php

use App\Http\Controllers\WebController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardBookingController;
use App\Http\Controllers\BookingController;
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

Route::get('/',[WebController::class,'index']);

Route::get('/login',[LoginController::class,'index']);
Route::post('/login', [LoginController::class,'auth']);
Route::post('/register', [LoginController::class,'register']);
Route::post('/logout', [LoginController::class,'logout']);

Route::resource('/dashboard', DashboardController::class);

Route::resource('/bookingdashboard', DashboardBookingController::class);

Route::resource('/booking', BookingController::class);


