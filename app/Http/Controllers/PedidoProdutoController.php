<?php

namespace App\Http\Controllers;

use App\EstoqueProduto;
use App\Pedido;
use App\PedidoProduto;
use App\Produto;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Http\Request;

class PedidoProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Pedido $pedido, $msg = "")
    {

        if ($msg != "") {
            echo "<script>alert('$msg');</script>";
        }
        return view('pedido.create', ['pedido' => $pedido]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Pedido $pedido)
    {

        $produto = Produto::where('codigo', 'like', '%' . $request->input('cod-produto'))
            ->get()->first();

        if (isset($produto->nome) && $produto->nome != '') {
            foreach ($pedido->loja->estoque->produtos as $produto) {
                $pedidoProduto = new PedidoProduto;
                $pedidoProduto->pedido_id = $pedido->id;
                $pedidoProduto->quantidade = $request->get('quantidade');
                if ($pedidoProduto->quantidade == "") {
                    $pedidoProduto->quantidade = 1;
                }
                if ($produto->codigo == $request->input('cod-produto')) {
                    if ($produto->pivot->quantidade >= $pedidoProduto->quantidade) {



                        $pedidoProduto->produto_id = $produto->id;
                        $pedidoProduto->save();
                        $sob_valor['valor_pedido'] = 0;
                        foreach ($pedido->produtos as $produto) {
                            $sob_valor['valor_pedido'] = $sob_valor['valor_pedido'] + floatval($produto->valor) * $produto->pivot->quantidade;
                        }


                        $estoque = EstoqueProduto::where('produto_id', 'like', '%' . $pedidoProduto->produto_id)->get()->first();
                        $dado['quantidade'] = $estoque->quantidade - $pedidoProduto->quantidade;

                        $estoque->update($dado);

                        $pedido->update($sob_valor);


                        break;
                    } else {
                        return redirect()->route('pedidoProduto.create', ['pedido' => $pedido->id, 'msg' => 'Quantidade solicitada maior o que o estoque atual que e : ' . $produto->pivot->quantidade]);
                    }
                }
            }

            if (isset($dado)) {

                return redirect()->route('pedidoProduto.create', ['pedido' => $pedido->id, 'msg' => 'Produto ADD com sucesso ']);
            } else {
                return redirect()->route('pedidoProduto.create', ['pedido' => $pedido->id, 'msg' => 'Produto não localizado no estoque da loja ']);
            }
        } else {
            return redirect()->route('pedidoProduto.create', ['pedido' => $pedido->id, 'msg' => 'Produto nao localizado']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function altualizarProdutoMenos(PedidoProduto $pedidoProduto, Pedido $pedido)
    {
        if ($pedidoProduto->quantidade > 1) {

            $dadoQuantidade['quantidade'] = $pedidoProduto->quantidade - 1;

            $pedidoProduto->update($dadoQuantidade);

            $sob_valor['valor_pedido'] = 0;
            foreach ($pedido->produtos as $produto) {
                $sob_valor['valor_pedido'] = $sob_valor['valor_pedido'] + floatval($produto->valor) * $produto->pivot->quantidade;
            }

            $pedido->update($sob_valor);


            $estoque = EstoqueProduto::where('produto_id', 'like', '%' . $pedidoProduto->produto_id)->get()->first();
            $dado['quantidade'] = $estoque->quantidade + 1;

            $estoque->update($dado);


            return redirect()->route('pedidoProduto.create', ['pedido' => $pedido->id, 'msg' => 'Quantidade atualizador com sucesso']);
        } else {
            $pedidoProduto->delete();

            $sob_valor['valor_pedido'] = 0;
            foreach ($pedido->produtos as $produto) {
                $sob_valor['valor_pedido'] = $sob_valor['valor_pedido'] + floatval($produto->valor) * $produto->pivot->quantidade;
            }

            $pedido->update($sob_valor);


            $estoque = EstoqueProduto::where('produto_id', 'like', '%' . $pedidoProduto->produto_id)->get()->first();
            $dado['quantidade'] = $estoque->quantidade + 1;

            $estoque->update($dado);

            return redirect()->route('pedidoProduto.create', ['pedido' => $pedido->id, 'msg' => 'Produto excluído com sucesso']);
        }
    }

    public function altualizarProdutoMais(PedidoProduto $pedidoProduto, Pedido $pedido)
    {
        foreach ($pedido->loja->estoque->produtos as $key => $produto) {
            if ($produto->id == $pedidoProduto->produto_id) {
                if ($produto->pivot->quantidade >= 1) {
                    $dadoQuantidade['quantidade'] = $pedidoProduto->quantidade + 1;

                    $pedidoProduto->update($dadoQuantidade);

                    $sob_valor['valor_pedido'] = 0;
                    foreach ($pedido->produtos as $produto) {
                        $sob_valor['valor_pedido'] = $sob_valor['valor_pedido'] + floatval($produto->valor) * $produto->pivot->quantidade;
                    }

                    $pedido->update($sob_valor);


                    $estoque = EstoqueProduto::where('id', 'like', '%' . $produto->pivot->id)->get()->first();
                    $dado['quantidade'] = $estoque->quantidade - 1;

                    $estoque->update($dado);

                    return redirect()->route('pedidoProduto.create', ['pedido' => $pedido->id, 'msg' => 'Quantidade atualizador com sucesso']);
                } else {
                    return redirect()->route('pedidoProduto.create', ['pedido' => $pedido->id, 'msg' => 'Quantidade solicitada maior o que o estoque atual que e : ' . $produto->pivot->quantidade]);
                }
            }
        }
    }
}
