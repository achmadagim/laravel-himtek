<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BeritaController;

Route::get('/', function () {
    return view('index');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/beranda', function () {
    return view('index');
});

Route::get('/berita', function () {
    return view('berita.berita');
});

Route::get('/login', [LoginController::class, 'login'])->name('login')
->middleware('guest');


Route::controller(BeritaController::class)->group(function () {
    Route::get('/olah-berita', 'index');
    Route::get('/olah-berita/create', 'create');
    Route::post('/olah-berita', 'store');
    Route::get('/olah-berita/{id}', 'show');
    Route::get('/olah-berita/edit/{id}', 'edit');
    Route::put('/olah-berita/{id}', 'update');
    Route::delete('/olah-berita/{id}', 'destroy');
});


Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index'])
->middleware('guest');

Route::post('/register', [RegisterController::class, 'store'])
->middleware('guest');

Route::post('/logout', [LoginController::class, 'logout']);



