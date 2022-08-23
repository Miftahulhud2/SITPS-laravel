<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PencoblosController;
use App\Http\Controllers\TpsController;

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
Route::get('/coba', [PencoblosController::class, 'coba']);

Route::post('/coba', [PencoblosController::class, 'coba1']);

Route::post('/coba', [PencoblosController::class, 'cobaupload']);

Route::get('/login', [LoginController::class ,'log'])->name('login');

Route::get('/beranda', [LoginController::class, 'index'])->middleware('guest');

Route::post('/beranda', [LoginController::class, 'login'])->middleware('guest');

Route::post('/logout', [LoginController::class, 'logout']);

route::get('/tentang',[PencoblosController::class, 'tentang'])->middleware('auth');

route::get('registrasi',[PencoblosController::class, 'registrasi'])->middleware('auth');

route::post('registrasi',[PencoblosController::class, 'reg'])->middleware('auth');

route::get('event', [PencoblosController::class, 'index'])->middleware('auth');

route::post('event', [PencoblosController::class, 'hadir'])->middleware('auth');

route::get('report', [PencoblosController::class, 'report'])->middleware('auth');

route::post('report', [PencoblosController::class, 'report_data'])->middleware('auth');




/* admin */
route::get('/admin', [AdminController::class, 'index'])->middleware('auth');

Route::get('/dashboard',[AdminController::class, 'dashboard'])->middleware('auth');

route::get('/tps', [AdminController::class, 'tps'])->middleware('auth');

route::post('/tps', [AdminController::class, 'kembali'])->middleware('auth');

route::get('/tps/{tps:slug}', [AdminController::class, 'datareport'])->middleware('auth');

Route::get('/datareport', [AdminController::class, 'datareport'])->middleware('auth');

Route::get('/datacalon', [AdminController::class, 'datacalon'])->middleware('auth');

Route::post('/datacalon', [AdminController::class, 'pendaftarandatacalon'])->middleware('auth');

Route::get('/datalogin', [AdminController::class, 'datalogin'])->middleware('auth');
