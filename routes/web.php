<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderControllerElf;
use App\Http\Controllers\OrderControllerPrivateTour;
use App\Http\Controllers\OrderControllerStudiTour;
use App\Http\Controllers\OrderControllerZiarahWali;






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

Route::get('/login', [AuthenticationController::class, 'login']);
Route::post('/cekLogin', [AuthenticationController::class, 'loginUser']);

Route::get('/', [MainController::class, 'index']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/services', [MainController::class, 'services']);
Route::get('/packages', [MainController::class, 'packages']);
Route::get('/contact', [MainController::class, 'contact']);
Route::post('/contact', [MainController::class, 'store']);
Route::get('/delMessage/{id}', [MainController::class, 'destroy']);

// form pemesanan
Route::get('/tbh-pesanan', [OrderController::class, 'create']);
Route::post('/tbh-pesanan', [OrderController::class, 'store']);
Route::get('/tbh-pesanan-elf', [OrderControllerElf::class, 'create']);
Route::post('/tbh-pesanan-elf', [OrderControllerElf::class, 'store']);
Route::get('/tbh-private-tour', [OrderControllerPrivateTour::class, 'create']);
Route::post('/tbh-private-tour', [OrderControllerPrivateTour::class, 'store']);

Route::get('/tbh-studi-tour', [OrderControllerStudiTour::class, 'create']);
Route::post('/tbh-studi-tour', [OrderControllerStudiTour::class, 'store']);

Route::get('/tbh-ziarah-wali', [OrderControllerZiarahWali::class, 'create']);
Route::post('/tbh-ziarah-wali', [OrderControllerZiarahWali::class, 'store']);


Route::middleware(['user'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/list-service', [ServiceController::class, 'index']);
    Route::get('/tbh-service', [ServiceController::class, 'create']);
    Route::post('/tbh-service', [ServiceController::class, 'store']);

    Route::get('/dft-pesanan', [OrderController::class, 'index']);

    Route::get('/dft-pesanan-elf', [OrderControllerElf::class, 'index']);

    Route::get('/dft-private-tour', [OrderControllerPrivateTour::class, 'index']);
    Route::get('/dft-studi-tour', [OrderControllerStudiTour::class, 'index']);

    Route::get('/dft-ziarah-wali', [OrderControllerZiarahWali::class, 'index']);
    Route::post('/logout', [AuthenticationController::class, 'logout']);
});
