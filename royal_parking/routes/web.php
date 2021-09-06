<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\webController;
use App\Http\Controllers\loginController;

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
Route::get('/dashboard', [webController::class,'dashboard']);

Route::get('/login', [loginController::class,'index']);
Route::post('/login', [loginController::class,'auth']);
Route::post('/register', [loginController::class,'register']);
Route::post('/logout', [loginController::class,'logout']);
