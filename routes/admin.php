<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;

use App\Http\Controllers\Admin\PublicacionesController;

Route::get('', [HomeController::class , 'index']);
Route::resource('admin/publicaciones', App\Http\Controllers\Admin\PublicacionesController::class)->names('admin.publicaciones');
