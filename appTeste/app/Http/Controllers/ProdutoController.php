<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produto = ["nome" => "livro"];

        //return view('produto.index', ["nome"=>"livro"]);
        return view('produto.index', compact('produto'));
    }
}
