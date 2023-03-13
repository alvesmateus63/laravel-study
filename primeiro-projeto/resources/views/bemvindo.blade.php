<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem Vindo</title>
</head>
<body>
    <div style="display: flex; justify-content: space-around;">
    @foreach ($pessoas as $pessoa)
        @component('components.card')
            @slot('image')
            {{$pessoa['image']}}
            @endslot
            @slot('name')
            {{$pessoa['nome']}}
            @endslot
            @slot('idade')
            {{$pessoa['idade']}}
            @endslot
            @slot('nascimento')
            {{$pessoa['birth']}}
            @endslot
        @endcomponent
    @endforeach
    </div>
</body>
</html>
