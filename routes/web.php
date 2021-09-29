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
/* RUTA PRINCIPAL */
/*Route::get('/', function () {
    return view('mipag');
});*/

/* RUTA DE PRODUCTOS */
/*Route::get('/', function () {
    return view('producto/producto');
});
/* RUTA DESDE FUNTION */
Route::get('/', function () {
    return "soy un hola mundo desde una ruta";
});



