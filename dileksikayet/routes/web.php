<?php

use App\Http\Controllers\DilekSikayetController;
use App\Http\Controllers\HocaController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::post('/dilek-ekle', [DilekSikayetController::class, 'adddilek'])->name('dilekekle');

Route::get('/hoca-giris', [HocaController::class, 'girisform'])->name('hocagiris');
Route::get('/hoca-cik', [HocaController::class, 'cikis'])->middleware('auth')->name('cikis');
Route::post('/hoca', [HocaController::class, 'giris'])->name('giris');

Route::get('/duzenle/{id}', [DilekSikayetController::class, 'duzenleform'])->middleware('auth')->name('duzenleform');
Route::post('/duzenlendi/{id}', [DilekSikayetController::class, 'duzenle'])->middleware('auth')->name('duzenle');

