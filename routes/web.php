<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/agents', [App\Http\Controllers\IndexController::class, 'agents'])->name('agents');
//Route::get('/blog', [App\Http\Controllers\IndexController::class, 'blog'])->name('blog');
Route::get('/contact', [App\Http\Controllers\IndexController::class, 'contact'])->name('contact');
Route::get('/buy', [App\Http\Controllers\IndexController::class, 'buyRent'])->name('buy');
Route::get('/sale', [App\Http\Controllers\IndexController::class, 'sale'])->name('sale');
Route::get('/product-detail', [App\Http\Controllers\IndexController::class, 'productDetail'])->name('productDetail');

Route::get('/panel', [App\Http\Controllers\HomeController::class, 'panelHome'])
        ->name('panel')
        ->middleware('auth'); //middllwares que no te deja entrar si no estas logueado
