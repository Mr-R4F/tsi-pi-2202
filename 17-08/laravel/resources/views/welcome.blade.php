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
            <h1>Meu primeiro Projeto Laravel</h1>
            {{var_dump($produtos)}}
            @foreach($produtos as $produto) <!-- p/ cd elemento guarda na var tal / tudo se repete p/ cd item...-->
                <ul>
                    <li>{{$produto}}</li>
                </ul>
            @endforeach
        </div>
    </body>
</html>