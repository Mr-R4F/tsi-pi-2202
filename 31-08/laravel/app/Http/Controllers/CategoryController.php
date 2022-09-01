<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; //sempre usar

class CategoryController extends Controller
{
    function index() {
        $categories = Category::all(); //na categories traga a model e retorna tudo
        return view('category.index')->with('categories', $categories); //abre a view com tal dados
    }

    function create() { //retorna view com formulário //cria coisas no banco.
        return view('category.create');
    }

    function store(Request $request) { //retorna view com formulário //cria ..
        //dd($request->name); //dump and die - mostra na tela e finalizar o código
        Category::create([
            'name' => $request -> name
        ]); //cria uma coluna com tal nome
        return redirect(route('category.index')); //volta p/ pág inicial, cria a categoria e redireciona para a index
    }

    function edit(Category $category) {
        return view('category.edit')->with('category', $category);//view que tenha acesso a essa var;
       // dd($category);
    }

    function update(Category $category, Request $request) { //pega a categoria a atualiza o nome basedo no formulário
       // dd($category); //mandar para o form
        $category->update([
            'name' => $request->name //pega a categoria a atualia o nome baseado no form
        ]); //cria uma coluna com tal nome
        return redirect(route('category.index')); //volta p/ pág inicial, cria a categoria e redireciona para a index
       // dd($category); /r/ecebe resquest o 'que está passando'
    }

    function destroy(Category $category) {    //saber qual categoria destruir
        $category->delete();
        return redirect(route('category.index')); //depois de apagar voltar para a index. (o nome é o nome da função)
    }
}
