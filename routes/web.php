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
    return view('pages.home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::resource('publicaciones','App\Http\Controllers\Admin\PublicacionesController');
Route::get('getPublicaciones', [App\Http\Controllers\Admin\PublicacionesController::class, 'get']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
    Route::resource('/dashboard', 'App\Http\Controllers\AdminController')->middleware('auth');
});

// Route::get('datatable', [App\Http\Controllers\TestController::class, 'index']);

