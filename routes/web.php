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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', 'IndexController@index')->name('home');



Route::get('/login', 'LoginController@loginIndex')->name('login.login');
Route::post('/login', 'LoginController@login')->name('login.login');
Route::get('/sair', 'LoginController@sair')->name('login.sair');



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
    Route::get('/pedido/busca', 'PedidoController@buscaCliente')->name('pedido.busca');

    Route::get('/pedido_produtos/create/{pedido}/{msg?}', 'PedidoProdutoController@create')->name('pedidoProduto.create');
    Route::post('/pedido-produto/store/{pedido}', 'PedidoProdutoController@store')->name('pedidoProduto.store');

    Route::put('/pedido-produto/-/{pedidoProduto}/{pedido}', 'PedidoProdutoController@altualizarProdutoMenos')->name('pedidoProduto.menos');
    Route::put('/pedido-produto/+/{pedidoProduto}/{pedido}', 'PedidoProdutoController@altualizarProdutoMais')->name('pedidoProduto.mais');

    Route::put('/pedido-finaliza/{pedido}', 'PedidoController@finalizarPedido')->name('pedido.finalizar');
    Route::delete('/pedido-delete/{pedido}', 'PedidoController@destroy')->name('pedido.destroy');

    Route::resource('/funcionario', 'FuncionarioController');

    Route::get('/caixa', 'CaixaController@index')->name('caixa');

    Route::get('/pre-venda/{cpf}', 'PreVendaController@busca')->name('pre-venda.busca');

});
