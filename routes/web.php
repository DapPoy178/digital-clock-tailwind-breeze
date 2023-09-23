<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\MoneyController;
use App\Http\Controllers\TextController;
use App\Http\Controllers\JadwalController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PublicController::class, 'index']);

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'authenticating']);

Route::middleware('auth')->group(function () {
    Route::get('dashboard',[DashboardController::class, 'index']);
    
    Route::get('text',[TextController::class, 'index']);
    Route::get('text-add',[TextController::class, 'add']);
    Route::post('text-add',[TextController::class, 'store']);
    
    Route::get('/text-edit/{id}', [TextController::class, 'edit']);
    Route::put('/text-edit/{id}', [TextController::class, 'update']);
    
    Route::get('text-delete/{id}', [TextController::class, 'destroy']);
    Route::get('text-deleted', [TextController::class, 'deletedJadwal']);
    Route::get('text-restore/{id}', [TextController::class, 'restore']);
    
    Route::get('uang-kas',[MoneyController::class, 'index']);
    Route::get('uang-kas-form',[MoneyController::class, 'form']);
    Route::post('uang-kas-form',[MoneyController::class, 'store']);
    
    Route::get('/uang-kas-edit/{id}', [MoneyController::class, 'edit']);
    Route::put('/uang-kas-edit/{id}', [MoneyController::class, 'update']);
    
    Route::get('uang-kas-delete/{id}', [MoneyController::class, 'destroy']);
    Route::get('uang-kas-deleted', [MoneyController::class, 'deletedMoney']);
    Route::get('uang-kas-restore/{id}', [MoneyController::class, 'restore']);
    
    Route::get('jadwal-kajian',[JadwalController::class, 'index']);
    Route::get('jadwal-kajian-tambah', [JadwalController::class, 'form']);
    Route::post('jadwal-kajian-tambah', [JadwalController::class, 'store']);
    
    Route::get('/jadwal-edit/{id}', [JadwalController::class, 'edit']);
    Route::put('/jadwal-edit/{id}', [JadwalController::class, 'update']);
    
    Route::get('jadwal-delete/{id}', [JadwalController::class, 'destroy']);
    Route::get('jadwal-deleted', [JadwalController::class, 'deletedJadwal']);
    Route::get('jadwal-restore/{id}', [JadwalController::class, 'restore']);
});
