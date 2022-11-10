<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\Register;
use App\Http\Controllers\Tanaman;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\KonsumenController;

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

Route::get('/', 'Home@index')->name('home');

Route::get('/login', 'Login@index')->name('login');
Route::get('/register', 'Register@index')->name('register');
Route::get('/register/create', [Register::class,'create']);
Route::post('/register/store', [Register::class,'store']);

//Halaman Tanaman
Route::get('/buah', 'Buah@index')->name('buah');
Route::get('/hias', 'Hias@index')->name('hias');

//Tanaman
Route::get('/tanaman', [Tanaman::class,'index']);
Route::get('/tanaman/create', [Tanaman::class,'create']);
Route::post('/tanaman/create', [Tanaman::class,'store']);
Route::delete('/tanaman/{id_tanaman}', [Tanaman::class, 'destroy']);
Route::get('/tanaman/{id_tanaman}/edit', [Tanaman::class, 'edit']);
Route::put('/tanaman/{id_tanaman}', [Tanaman::class, 'update']);

//Transaksi
Route::get('/transaksi', [TransaksiController::class,'index']);
Route::get('/transaksi/{id_transaksi}/edit', [TransaksiController::class, 'edit']);
Route::delete('/transaksi/{id_transaksi}', [TransaksiController::class, 'destroy']);
Route::put('/transaksi/{id_transaksi}', [TransaksiController::class, 'update']);

//Kosumen
Route::get('/konsumen', [KonsumenController::class,'index']);
Route::get('/konsumen/{id_konsumen}/edit', [KonsumenController::class, 'edit']);
Route::delete('/konsumen/{id_konsumen}', [KonsumenController::class, 'destroy']);
Route::put('/konsumen/{id_konsumen}', [KonsumenController::class, 'update']);

