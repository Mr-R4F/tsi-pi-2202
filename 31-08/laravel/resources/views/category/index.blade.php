<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Esta página retorna categorias</h1>
        @foreach($categories as $category);
        <li>{{$category->name}}
            <a href="{{route('category.edit', $category->id)}}">Editar</a>
            <a href="{{route('category.destroy', $category->id)}}">DELETAR!</a>
        </li>
        @endforeach
    </body>
</html>
