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

/* Route::get('/', function () {
    return view('index');
}); */

Auth::routes();

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('/');
Route::get('/about', [App\Http\Controllers\IndexController::class, 'about'])->name('about');
Route::get('/about', [App\Http\Controllers\IndexController::class, 'about'])->name('about');

Route::get('/panel', [App\Http\Controllers\HomeController::class, 'panel'])
        ->name('panel')
        ->middleware('auth'); //middllwares que no te deja entrar si no estas logueado
