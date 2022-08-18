<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home() {
        $resultado = ['P1', 'P2', 'P3'];
        //return view('welcome'); //retorna a página, mostra algo para o usuario, já sabe que tende procurar o endereço de pasta
        return view('welcome') -> with('produtos', $resultado); //abra o array....; (nome var, valores)
    } //retorna a view 'welcom'

    function sobre() {
        return view('sobre');
    }

    function carrinho() {
        return view('carrinho');
    }
}
