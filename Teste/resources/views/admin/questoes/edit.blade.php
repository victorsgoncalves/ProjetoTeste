<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atualizar Questões</title>
</head>
<body>

<h1>Atualizar Questões</h1>

<form action="{{route('admin.questoes.update', $registro->id)}}" method="post">
@csrf
    <label for="enunciado">Enunciado: </label><br>
    <textarea name="enunciado" id="" cols="30" rows="10"></textarea><br><br>

    <label for="teste">Teste:</label>
    <select name="teste" id="teste">
    @foreach (registros as registro) 
        <option>{{ $registro->nome }}</option>
    @endforeach
    </select><br>

    <label for="respostaA">Resposta A:</label>
    <input type="text" name="respostaA" id="respostaA" value=""><br><br>

    <label for="respostaB">Resposta B:</label>
    <input type="text" name="respostaB" id="respostaB" value=""><br><br>

    <label for="respostaC">Resposta C:</label>
    <input type="text" name="respostaC" id="respostaC" value=""><br><br>

    <label for="respostaD">Resposta D:</label>
    <input type="text" name="respostaD" id="respostaD" value=""><br><br>

    <label for="respostaE">Resposta E:</label>
    <input type="text" name="respostaE" id="respostaE" value=""><br><br>
    <select name="" id="respostaCorreta">
    <option>A</option>
    <option>B</option>
    <option>C</option>
    <option>D</option>
    <option>E</option>
    </select><br><br>
    <label for="ValorQuestao">Valor total da questão:</label>
    <input type="number" name="ValorQuestao"><br><br>

    <button>Atualizar</button>
</form> <br>

</body>
</html>