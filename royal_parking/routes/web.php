<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\webController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookingDashboardController;
use App\Http\Controllers\BookingController;

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


Route::get('/', [webController::class,'index']);
Route::get('/exel', [webController::class,'exel']);

Route::get('/login', [loginController::class,'index']);
Route::post('/login', [loginController::class,'auth']);
Route::post('/register', [loginController::class,'register']);
Route::post('/logout', [loginController::class,'logout']);

Route::resource('/booking', BookingController::class);

Route::resource('/dashboard', DashboardController::class);

Route::resource('/bookingdashboard', BookingDashboardController::class);



// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/login', function () {
//     return view('auth.login');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard.main.home');
// });

// Route::get('/bookingdashboard', function () {
//     return view('dashboard.main.parkiran');
// });
