<?php

use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('profileAdmin',[UserController::class,'personalAdmin'])->name('personal');
    Route::get('userData',[UserController::class,'userData'])->name('user-data');
    Route::get('teknisi',[UserController::class,'teknisi'])->name('teknisi');
    Route::get('transaksi',[TransaksiController::class,'index'])->name('transaksi');
});
