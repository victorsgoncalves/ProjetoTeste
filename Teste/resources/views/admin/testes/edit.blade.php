<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Teste</title>
</head>
<body>
<form action="{{route('admin.testes.update', $registro->id)}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="put">

        <label for="nome">Nome</label><br>
        <input type="text" name="nome" id="nome" value="{{isset($registro->nome)?$registro->nome:''}}"><br><br>

        <label for="pontuacao_minima">Pontuação mínima para aprovação:</label><br>
        <input type="number" name="pontuacao_minima" id="pontuacao_minima" value="{{isset($registro->pontuacao_minima)?$registro->pontuacao_minima:''}}"><br><br>

        <button>Atualizar</button>

    </form>
</body>
</html>
