<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Testes</title>
</head>
<body>

<form action="{{route('admin.testes.store')}}" method="post">
@csrf

<label for="nome">Nome</label><br>
<input type="text" name="nome" id="nome"><br><br>

<label for="pontuacao_minima">Pontuação mínima para aprovação:</label><br>
<input type="number" name="pontuacao_minima" id="pontuacao_minima"><br><br>

<button>Salvar</button>

</form>
</body>
</html>




