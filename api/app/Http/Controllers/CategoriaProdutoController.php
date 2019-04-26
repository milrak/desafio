<?php

namespace App\Http\Controllers;

use App\CategoriaProduto;
use Illuminate\Http\Request;

class CategoriaProdutoController extends Controller
{
    //Lista categorias
    public function index()
    {
        $categorias = CategoriaProduto::all();
        return response()->json($categorias);
    }

    //Busca categoria
    public function show($id)
    {
        $categoria = CategoriaProduto::find($id);

        if(!$categoria) {
            return response()->json([
                'mensagem'   => 'Categoria não encontrata',
            ], 404);
        }
        return response()->json($categoria);
    }

    //Cria produto
    public function store(Request $request)
    {
        $categoria = new CategoriaProduto();
        $categoria->fill($request->all());
        $categoria->save();

        return response()->json(['menssagem'=>'Criado com sucesso!', 'data'=> $categoria], 201);
    }

    //Alterar produto
    public function update(Request $request, $id)
    {
        $produto = CategoriaProduto::find($id);

        if(!$categoria) {
            return response()->json([
                'message'   => 'Categoria não encontrata',
            ], 404);
        }

        $categoria->fill($request->all());
        $categoria->save();

        return response()->json(['menssagem'=> 'Alteração com sucesso!', 'data'=> $categoria]);
    }

    //Exclui protudo
    public function destroy($id)
    {
        $categoria = CategoriaProduto::find($id);

        if(!$categoria) {
            return response()->json([
                'menssagem'   => 'Categoria não encontrata',
            ], 404);
        }

        if($categoria->delete())
        {
            return response()->json([
                'menssagem'   => 'Excluído com sucesso!',
            ]);
        }
    }
}
