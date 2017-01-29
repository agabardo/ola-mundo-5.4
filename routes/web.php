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

/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'ProdutosController@index');
Route::get('contato', 'ContatoController@index');
Route::post('contato/enviar', 'ContatoController@enviar');

Route::resource('produtos', 'ProdutosController');
Route::post('produtos/buscar', 'ProdutosController@buscar');
Route::get('adicionar-produto', 'ProdutosController@create');
Route::get('produtos/{id}/editar', 'ProdutosController@edit');
Route::get('produtos/{id}/detalhes', 'ProdutosController@show');
Route::get('extras-eloquent', 'ProdutosController@extras');

Route::auth();
Route::get('/home', 'HomeController@index');
