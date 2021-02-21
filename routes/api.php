<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




Route::resource('t_modelos', 't_modelosAPIController');

Route::resource('estados', 'EstadoAPIController');

Route::resource('aliados', 'AliadoAPIController');

Route::resource('clientes', 'ClienteAPIController');

Route::resource('categorias', 'CategoriaAPIController');

Route::resource('servicios', 'ServicioAPIController');

Route::resource('productos', 'ProductoAPIController');

Route::resource('posts', 'PostAPIController');

Route::resource('rols', 'RolAPIController');

Route::resource('ilustrables', 'IlustrableAPIController');





