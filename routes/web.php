<?php

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

Auth::routes();

Route::resource('clientes', App\Http\Controllers\ClienteController::class)->middleware('auth');
Route::resource('prestamos', App\Http\Controllers\PrestamoController::class)->middleware('auth');
Route::resource('productos', App\Http\Controllers\ProductoController::class)->middleware('auth');
Route::resource('seguros', App\Http\Controllers\SeguroController::class)->middleware('auth');
Route::resource('ahorros', App\Http\Controllers\AhorroController::class)->middleware('auth');
Route::resource('tarjetas', App\Http\Controllers\TarjetaController::class)->middleware('auth');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
