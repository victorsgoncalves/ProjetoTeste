<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Questões</title>
</head>
<body>

<h1>Cadastrar Questões</h1>

<form action="{{route('admin.questoes.store')}}" method="post">
@csrf
    <label for="enunciado">Enunciado: </label><br>
    <textarea name="enunciado" id="enunciado" cols="30" rows="10"></textarea><br><br>

    <label for="teste">Teste:</label>
    <select name="teste" id="teste">
        <option value="">Selecione</option>
        @foreach($registros as $registro)
            <option value="{{$registro->id}}">{{$registro->nome}}</option>
        @endforeach
    </select><br><br>

    <label for="respostaA">Resposta A:</label>
    <input type="text" name="respostaA" id="respostaA"><br><br>

    <label for="respostaB">Resposta B:</label>
    <input type="text" name="respostaB" id="respostaB"><br><br>

    <label for="respostaC">Resposta C:</label>
    <input type="text" name="respostaC" id="respostaC"><br><br>

    <label for="respostaD">Resposta D:</label>
    <input type="text" name="respostaD" id="respostaD"><br><br>

    <label for="respostaE">Resposta E:</label>
    <input type="text" name="respostaE" id="respostaE"><br><br>

    <select name="respostaCerta" id="respostaCerta">
    <option value="">Selecione</option>
    @foreach($respostas as $resposta)
    <option>{{$resposta}}</option>
    @endforeach
    </select><br><br>

    <label for="valorTotalQuestao">Valor total da questão:</label>
    <input type="number" name="valorTotalQuestao" id="valorTotalQuestao"><br><br>

    <button>Salvar</button>
</form> <br>

</body>
</html>


