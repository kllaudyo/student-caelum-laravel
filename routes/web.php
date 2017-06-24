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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/Produto', 'ProdutosController@form');
Route::get('/Produtos/{id}', 'ProdutosController@editar');
Route::get('/Produtos', 'ProdutosController@lista');

Route::put('/Produtos', 'ProdutosController@alterar');
Route::post('/Produtos', 'ProdutosController@salvar');
Route::delete('/Produtos', 'ProdutosController@remover');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
