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
Route::get('/herida', function () {
    return view('/herida');
});
Route::get('/vincularidad', function () {
    return view('/vincularidad');
});
Route::get('/energia', function () {
    return view('/energia');
});
Route::get('/distintiva', function () {
    return view('/distintiva');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/auth/login', function () {
    return view('auth/login');
});
Route::get('/auth/register', function () {
    return view('auth/register');
});
Route::get('/alejamiento/alejamiento', function () {
    return view('/caminos/alejamiento/alejamiento');
});Route::get('/alejamiento/alejamiento1', function () {
    return view('/caminos/alejamiento/alejamiento1');
});
Route::get('/alejamiento/alejamiento2', function () {
    return view('/caminos/alejamiento/alejamiento2');
});
Route::get('/alejamiento/alejamiento3', function () {
    return view('/caminos/alejamiento/alejamiento3');
});
Route::get('/alejamiento/alejamiento4', function () {
    return view('/caminos/alejamiento/alejamiento4');
});
Route::get('/alejamiento/alejamiento5', function () {
    return view('/caminos/alejamiento/alejamiento5');
});
Route::get('/alejamiento/alejamiento6', function () {
    return view('/caminos/alejamiento/alejamiento6');
});
Route::get('/alejamiento/alejamiento7', function () {
    return view('/caminos/alejamiento/alejamiento7');
});
Route::get('/alejamiento/alejamiento8', function () {
    return view('/caminos/alejamiento/alejamiento8');
});
Route::get('  /alejamiento/alejamiento9', function () {
    return view('/caminos/alejamiento/alejamiento9');
});
Route::get('/encuentro', function () {
    return view('/caminos/encuentro/encuentro');
});
Route::get('encuentro1', function () {
    return view('/caminos/encuentro/encuentro1');
});
Route::get('encuentro2', function () {
    return view('/caminos/encuentro/encuentro2');
});
Route::get('encuentro3', function () {
    return view('/caminos/encuentro/encuentro3');
});
Route::get('encuentro4', function () {
    return view('/caminos/encuentro/encuentro4');
});
Route::get('encuentro5', function () {
    return view('/caminos/encuentro/encuentro5');
});
Route::get('encuentro6', function () {
    return view('/caminos/encuentro/encuentro6');
});
Route::get('encuentro7', function () {
    return view('/caminos/encuentro/encuentro7');
});
Route::get('encuentro8', function () {
    return view('/caminos/encuentro/encuentro8');
});
Route::get('encuentro9', function () {
    return view('/caminos/encuentro/encuentro9');
});
Route::get('dar1', function () {
    return view('/dar/dar1');
});
Route::get('recibir1', function () {
    return view('/recibir/recibir1');
});

Route::get('/compra', 'HomeController@compra');
Route::get('/checkout/preferences','mercadoPagoController@createPreferencePayment');
Route::get('succes', 'mercadoPagoController@succes');
Route::get('/download',function () {
    return view('/download');
})->middleware('auth');
Route::get('/fulltest', 'fulltest@primerLista');
Route::post('/pag2', 'fulltest@segundaLista');
Route::post('/pag3', 'fulltest@tercerLista');
Route::post('/pag4', 'fulltest@cuartaLista');
Route::post('/pag5', 'fulltest@quintaLista');
Route::post('/pag6', 'fulltest@sextaLista');
Route::post('/pag7', 'fulltest@septimaLista');
Route::post('/pag8', 'fulltest@octavaLista');
Route::post('/pag9', 'fulltest@novenaLista');
Route::post('/devolucion', 'fulltest@resultado');
Route::get('/pag1t', 'preguntas@primerLista');
Route::post('/pag2t', 'preguntas@segundaLista');
Route::post('/pag3t', 'preguntas@tercerLista');
Route::post('/pag4t', 'preguntas@cuartaLista');
Route::post('/pag5t', 'preguntas@quintaLista');
Route::post('/pag6t', 'preguntas@sextaLista');
Route::post('/pag7t', 'preguntas@septimaLista');
Route::post('/pag8t', 'preguntas@octavaLista');
Route::post('/pag9t', 'preguntas@novenaLista');
Route::post('/devolucion1', 'preguntas@resultado');
Route::get('/final', function () {
    return view('/final');});
Route::get('trabajo/trabajo1', function () {
    return view('/trabajo/trabajo1');
});
Route::get('trabajo/trabajo2', function () {
    return view('/trabajo/trabajo2');
});
Route::get('trabajo/trabajo3', function () {
    return view('/trabajo/trabajo3');
});
Route::get('trabajo/trabajo4', function () {
    return view('/trabajo/trabajo4');
});
Route::get('trabajo/trabajo5', function () {
    return view('/trabajo/trabajo5');
});
Route::get('trabajo/trabajo6', function () {
    return view('/trabajo/trabajo6');
});
Route::get('trabajo/trabajo7', function () {
    return view('/trabajo/trabajo7');
});
Route::get('trabajo/trabajo8', function () {
    return view('/trabajo/trabajo8');
});
Route::get('trabajo/trabajo9', function () {
    return view('/trabajo/trabajo9');
});
Route::get('amor/amor1', function () {
    return view('/amor/amor1');
});
Route::get('amor/amor2', function () {
    return view('/amor/amor2');
});
Route::get('amor/amor3', function () {
    return view('/amor/amor3');
});
Route::get('amor/amor4', function () {
    return view('/amor/amor4');
});
Route::get('amor/amor5', function () {
    return view('/amor/amor5');
});
Route::get('amor/amor6', function () {
    return view('/amor/amor6');
});
Route::get('amor/amor7', function () {
    return view('/amor/amor7');
});
Route::get('amor/amor8', function () {
    return view('/amor/amor8');
});
Route::get('amor/amor9', function () {
  return view('/amor/amor9');
});
Route::get('/mirar_al_mundo/ejes/ejes', function () {
    return view('/mirar_al_mundo/ejes/ejes');
});
Route::get('/mirar_al_mundo/ejes/ejes1', function () {
    return view('/mirar_al_mundo/ejes/ejes1');
});
Route::get('/mirar_al_mundo/ejes/ejes2', function () {
    return view('/mirar_al_mundo/ejes/ejes2');
});
Route::get('/mirar_al_mundo/ejes/ejes3', function () {
    return view('/mirar_al_mundo/ejes/ejes3');
});
Route::get('/mirar_al_mundo/ejes/ejes4', function () {
    return view('/mirar_al_mundo/ejes/ejes4');
});
Route::get('/mirar_al_mundo/ejes/ejes5', function () {
    return view('/mirar_al_mundo/ejes/ejes5');
});
Route::get('/mirar_al_mundo/ejes/ejes6', function () {
    return view('/mirar_al_mundo/ejes/ejes6');
});
Route::get('/mirar_al_mundo/ejes/ejes7', function () {
    return view('/mirar_al_mundo/ejes/ejes7');
});
Route::get('/mirar_al_mundo/ejes/ejes8', function () {
    return view('/mirar_al_mundo/ejes/ejes8');
});
Route::get('/mirar_al_mundo/ejes/ejes9', function () {
    return view('/mirar_al_mundo/ejes/ejes9');
});
