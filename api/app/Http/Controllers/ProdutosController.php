<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{

    //Lista produtos
    public function index()
    {
        $produtos = Produto::all();
        return response()->json($produtos);
    }

    //Busca produto
    public function show($id)
    {
        $produto = Produto::find($id);

        if(!$produto) {
            return response()->json([
                'mensagem'   => 'Produto não encontrato',
            ], 404);
        }
        return response()->json($produto);
    }

    //Cria produto
    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->fill($request->all());
        $produto->save();

        return response()->json(['menssagem'=>'Criado com sucesso!', 'data'=> $produto], 201);
    }

    //Alterar produto
    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);

        if(!$produto) {
            return response()->json([
                'message'   => 'Produto não encontato',
            ], 404);
        }

        $produto->fill($request->all());
        $produto->save();

        return response()->json(['menssagem'=> 'Alteração com sucesso!', 'data'=> $produto]);
    }

    //Exclui protudo
    public function destroy($id)
    {
        $produto = Produto::find($id);

        if(!$produto) {
            return response()->json([
                'menssagem'   => 'Produto não encontrato',
            ], 404);
        }

        if($produto->delete())
        {
            return response()->json([
                'menssagem'   => 'Excluído com sucesso!',
            ]);
        }
    }

}
