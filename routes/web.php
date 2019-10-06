<?php

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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/eneatipo1', function () {
    return view('eneatipo1');
});
Route::get('/complementos1', function () {
    return view('complementos1');
});
Route::get('/prueba', 'preguntas@listado' );
Route::post('/devolucion','preguntas@resultado');
