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
            <form action="{{route('category.store')}}" method="post"><!-- Manda post/get para o endereço tal (nas rotas e procura a pasta) -->
                @csrf <!-- garantia que tudo está vindo desta página sempre colocar em FORMS-->
                <fieldset>
                    <label for="nm">Nome da categoria</label>
                    <input type="text" name="name" id="nm">
                    <button type="submit">Enviar</button>
                </fieldset>
            </form>
        </div>
    </body>
</html>
