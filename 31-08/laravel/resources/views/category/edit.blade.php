<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <h1>Editar categoria</h1>
            <form action="{{route('category.update', $category->id)}}" method="post"><!-- Vai para rota update passando a rota de categoria cujo o id está sendo passado -->
                <!-- Manda post/get para o endereço tal (nas rotas e procura a pasta) -->
                @csrf <!-- garantia que tudo está vindo desta página sempre colocar em FORMS-->
                @method('PUT'); <!-- Mesmo que o método seja post ele usa este -->
                <fieldset>
                    <label for="nm">Nome da categoria</label>
                    <input type="text" name="name" id="nm" value="{{$category->name}}">
                    <button type="submit">EDITAR</button>
                </fieldset>
            </form>
        </div>
    </body>
</html>
