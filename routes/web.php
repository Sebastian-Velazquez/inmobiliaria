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

/** IndexController */
    Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('/');
    Route::get('/about', [App\Http\Controllers\IndexController::class, 'about'])->name('about');
    Route::get('/agents', [App\Http\Controllers\IndexController::class, 'agents'])->name('agents');
    //Route::get('/blog', [App\Http\Controllers\IndexController::class, 'blog'])->name('blog');
    Route::get('/contact', [App\Http\Controllers\IndexController::class, 'contact'])->name('contact');
    Route::get('/buy', [App\Http\Controllers\IndexController::class, 'buyRent'])->name('buy');
    Route::get('/sale', [App\Http\Controllers\IndexController::class, 'sale'])->name('sale');
    Route::get('/product-detail/{id}', [App\Http\Controllers\IndexController::class, 'productDetail'])->name('productDetail');
    Route::get('/image/file/{filename}', [App\Http\Controllers\IndexController::class, 'imagePath']) //EL id esta mandado por get en request
        ->name('imagePath');
        
    /** HomeController - Panel de usario */
    Route::get('/panel', [App\Http\Controllers\HomeController::class, 'panelHome'])
        ->name('panel')
        ->middleware('auth'); //middllwares que no te deja entrar si no estas logueado
    Route::get('/product-list', [App\Http\Controllers\HomeController::class, 'productlist'])
        ->name('list')
        ->middleware('auth');
    Route::get('/form-create', [App\Http\Controllers\HomeController::class, 'productCreate'])
        ->name('productCreate')
        ->middleware('auth'); //middllwares que no te deja entrar si no estas logueado
    Route::get('/form-edit', [App\Http\Controllers\HomeController::class, 'viewEdit']) //EL id esta mandado por get en request
        ->name('viewEdit')
        ->middleware('auth');

    Route::get('/list-delete', [App\Http\Controllers\HomeController::class, 'viewDelete'])
        ->name('listDelete')
        ->middleware('auth');
    Route::get('/view-restore', [App\Http\Controllers\HomeController::class, 'viewRestore'])
        ->name('formRestores')
        ->middleware('auth');

/** ProductController - CRUD */
    Route::post('/process-create', [App\Http\Controllers\ProductController::class, 'create'])
        ->name('processCreate')
        ->middleware('auth');
    Route::put('/process-edit', [App\Http\Controllers\ProductController::class, 'edit'])
        ->name('processEdit')
        ->middleware('auth');
    Route::delete('/process-delete', [App\Http\Controllers\ProductController::class, 'delete'])
        ->name('processDelete')
        ->middleware('auth');
    Route::put('/process-restore', [App\Http\Controllers\ProductController::class, 'restore'])
        ->name('processRestore')
        ->middleware('auth');
    Route::delete('/process-destroy', [App\Http\Controllers\ProductController::class, 'destroy'])
        ->name('processDestroy')
        ->middleware('auth');

/** ProductController - Funciones */
    Route::get('/outstanding/{id}', [App\Http\Controllers\ProductController::class, 'outstanding'])
        ->name('outstanding')
        ->middleware('auth');
    Route::get('/status/{id}', [App\Http\Controllers\ProductController::class, 'status'])
        ->name('status')
        ->middleware('auth');