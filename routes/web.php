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
Route::get('/who', function () {
    return view('who');
});
Route::get('/mirarme/eneatipo1', function () {
    return view('/mirarme/eneatipo1');
});
Route::get('/mirarme/eneatipo2', function () {
    return view('/mirarme/eneatipo2');
});
Route::get('/mirarme/eneatipo3', function () {
    return view('/mirarme/eneatipo3');
});
Route::get('/mirarme/eneatipo4', function () {
    return view('/mirarme/eneatipo4');
});
Route::get('/mirarme/eneatipo5', function () {
    return view('/mirarme/eneatipo5');
});
Route::get('/mirarme/eneatipo6', function () {
    return view('/mirarme/eneatipo6');
});
Route::get('/mirarme/eneatipo7', function () {
    return view('/mirarme/eneatipo7');
});
Route::get('/mirarme/eneatipo8', function () {
    return view('/mirarme/eneatipo8');
});
Route::get('/mirarme/eneatipo9', function () {
    return view('/mirarme/eneatipo9');
});
Route::get('/mirar_al_mundo/alas/alas', function () {
    return view('/mirar_al_mundo/alas/alas');
});
Route::get('/mirar_al_mundo/alas/alas1', function () {
    return view('/mirar_al_mundo/alas/alas1');
});
Route::get('/mirar_al_mundo/alas/alas2', function () {
    return view('/mirar_al_mundo/alas/alas2');
});
Route::get('/mirar_al_mundo/alas/alas3', function () {
    return view('/mirar_al_mundo/alas/alas3');
});
Route::get('/mirar_al_mundo/alas/alas4', function () {
    return view('/mirar_al_mundo/alas/alas4');
});
Route::get('/mirar_al_mundo/alas/alas5', function () {
    return view('/mirar_al_mundo/alas/alas5');
});
Route::get('/mirar_al_mundo/alas/alas6', function () {
    return view('/mirar_al_mundo/alas/alas6');
});
Route::get('/mirar_al_mundo/alas/alas7', function () {
    return view('/mirar_al_mundo/alas/alas7');
});
Route::get('/mirar_al_mundo/alas/alas8', function () {
    return view('/mirar_al_mundo/alas/alas8');
});
Route::get('/mirar_al_mundo/alas/alas9', function () {
    return view('/mirar_al_mundo/alas/alas9');
});
Route::get('/mirar_al_mundo/brazos/brazos', function () {
    return view('/mirar_al_mundo/brazos/brazos');
});
Route::get('/mirar_al_mundo/brazos/brazos1', function () {
    return view('/mirar_al_mundo/brazos/brazos1');
});
Route::get('/mirar_al_mundo/brazos/brazos2', function () {
    return view('/mirar_al_mundo/brazos/brazos2');
});
Route::get('/mirar_al_mundo/brazos/brazos3', function () {
    return view('/mirar_al_mundo/brazos/brazos3');
});
Route::get('/mirar_al_mundo/brazos/brazos4', function () {
    return view('/mirar_al_mundo/brazos/brazos4');
});
Route::get('/mirar_al_mundo/brazos/brazos5', function () {
    return view('/mirar_al_mundo/brazos/brazos5');
});
Route::get('/mirar_al_mundo/brazos/brazos6', function () {
    return view('/mirar_al_mundo/brazos/brazos6');
});
Route::get('/mirar_al_mundo/brazos/brazos7', function () {
    return view('/mirar_al_mundo/brazos/brazos7');
});

Route::get('/mirar_al_mundo/brazos/brazos8', function () {
    return view('/mirar_al_mundo/brazos/brazos8');
});
Route::get('/mirar_al_mundo/brazos/brazos9', function () {
    return view('/mirar_al_mundo/brazos/brazos9');
});
Route::get('/mirar_al_mundo/ciegos/ciegos', function () {
    return view('/mirar_al_mundo/ciegos/ciegos');
});
Route::get('/mirar_al_mundo/ciegos/ciegos1', function () {
    return view('/mirar_al_mundo/ciegos/ciegos1');
});
Route::get('/mirar_al_mundo/ciegos/ciegos2', function () {
    return view('/mirar_al_mundo/ciegos/ciegos2');
});
Route::get('/mirar_al_mundo/ciegos/ciegos3', function () {
    return view('/mirar_al_mundo/ciegos/ciegos3');
});
Route::get('/mirar_al_mundo/ciegos/ciegos4', function () {
    return view('/mirar_al_mundo/ciegos/ciegos4');
});
Route::get('/mirar_al_mundo/ciegos/ciegos5', function () {
    return view('/mirar_al_mundo/ciegos/ciegos5');
});
Route::get('/mirar_al_mundo/ciegos/ciegos6', function () {
    return view('/mirar_al_mundo/ciegos/ciegos6');
});
Route::get('/mirar_al_mundo/ciegos/ciegos7', function () {
    return view('/mirar_al_mundo/ciegos/ciegos7');
});

Route::get('/mirar_al_mundo/ciegos/ciegos8', function () {
    return view('/mirar_al_mundo/ciegos/ciegos8');
});
Route::get('/mirar_al_mundo/ciegos/ciegos9', function () {
    return view('/mirar_al_mundo/ciegos/ciegos9');
});
Route::get('/mirar_adentro/herida', function () {
    return view('/mirar_adentro/herida');
});
Route::get('/mirar_adentro/herida1', function () {
    return view('/mirar_adentro/herida1');
});
Route::get('/mirar_adentro/herida2', function () {
    return view('/mirar_adentro/herida2');
});
Route::get('/mirar_adentro/herida3', function () {
    return view('/mirar_adentro/herida3');
});
Route::get('/mirar_adentro/herida4', function () {
    return view('/mirar_adentro/herida4');
});
Route::get('/mirar_adentro/herida5', function () {
    return view('/mirar_adentro/herida5');
});
Route::get('/mirar_adentro/herida6', function () {
    return view('/mirar_adentro/herida6');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/auth/login', function () {
    return view('auth/login');
});
Route::get('/auth/register', function () {
    return view('auth/register');
});
Route::get('/compra', 'HomeController@compra');
Route::get('/checkout/preferences','mercadoPagoController@createPreferencePayment');  
