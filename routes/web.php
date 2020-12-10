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

Route::get('/', \App\Http\Controllers\Post\Index::class);
Route::get('post/{id}', \App\Http\Controllers\Post\View::class);

Route::middleware(['auth'])->prefix('dashboard')->group(function () {

    Route::get('/', \App\Http\Controllers\Post\Dashboard::class)->name('dashboard');
    Route::get('post/create', \App\Http\Controllers\Post\Create::class);
    Route::post('post/create', \App\Http\Controllers\Post\Store::class);
});

require __DIR__.'/auth.php';
