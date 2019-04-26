<?php

namespace App\Http\Controllers;

use App\CategoriaProduto;
use Illuminate\Http\Request;

class CategoriaProdutoController extends Controller
{
    public function index()
    {
        $categorias = CategoriaProduto::all();
        return response()->json($categorias);
    }
}
