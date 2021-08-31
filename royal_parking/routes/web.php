<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web;
use App\Http\Controllers\webController;

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

Route::get('kendaraan', [webController::class,'kendaraan']);
