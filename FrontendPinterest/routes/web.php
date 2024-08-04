<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FeedController;

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

Route::get('/mensajeria', function () {
    return view('mensajeria');
});

Route::get('/creartablero', function () {
    return view('creartablero');
});

Route::get('/compartir', function () {
    return view('compartir');
});

Route::get('/configuracion', function () {
    return view('configuracion');
});

Route::get('/buscarideas', function () {
    return view('buscarideas');
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

Route::get('/actualizaciones', function () {
    return view('actualizaciones');
});

Route::get('/feed', function () {
    return view('feed');
});
Route::get('/feed', [FeedController::class, 'index']);