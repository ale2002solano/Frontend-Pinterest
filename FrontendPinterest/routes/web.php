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

Route::get('/login', function () {
    return view('login');
});

Route::get('/mensajes', function () {
    return view('mensajeria');
});

Route::get('/invitar', function () {
    return view('invitar');
});

Route::get('/pines', function () {
    return view('pines');
});

Route::get('/tableros', function () {
    return view('tableros');
});
