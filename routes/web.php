<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::resource('libros', App\Http\Controllers\libroController::class );

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
