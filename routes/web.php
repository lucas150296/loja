<?php

use App\estoque;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProdutoController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', 'IndexController@index')->name('home');



Route::get('/login', 'ClienteController@loginIndex')->name('cliente.login');
Route::post('/login', 'ClienteController@login')->name('cliente.login');
Route::get('/sair', 'ClienteController@sair')->name('cliente.sair');



Route::middleware(['autenticacao'])->group(function () {

    Route::get('/admin', 'IndexController@admin')->name('admin');
    Route::resource('/produto', 'ProdutoController');

    Route::resource('/cliente', 'ClienteController');

    Route::resource('/loja', 'LojaController');

    route::resource('/estoque', 'EstoqueController');

    Route::get('/estoque-produto/create/{estoque}', 'EstoqueProdutoController@create')->name('estoqueProduto.create');
    Route::post('/estoque-produto/create/{estoque}', 'EstoqueProdutoController@store')->name('estoqueProduto.store');
    Route::delete('/estoque-produto/delete/{estoqueProduto}/{estoque}', 'EstoqueProdutoController@destroy')->name('estoqueProduto.destroy');

    Route::get('/pedido', 'PedidoController@index')->name('pedido.index');
    Route::get('/pedido/create', 'PedidoController@create')->name('pedido.create');
    Route::get('/pedido/busca', 'PedidoController@buscaCliente')->name('pedido.busca');
    Route::resource('/funcionario', 'FuncionarioController');
});
