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

<form action="{{route('admin.questoes.update', $registroQ->id)}}" method="post">
@csrf
<input type="hidden" name="_method" value="put">

    <label for="enunciado">Enunciado: </label><br>
    <textarea name="enunciado" id="enunciado" cols="30" rows="10">{{isset($registroQ->enunciado)?$registroQ->enunciado:''}}</textarea><br><br>

    <label for="teste">Teste:</label>
    <select name="teste" id="teste">
        <option>{{ $registroQ->teste }}</option>
    </select><br>

    <label for="respostaA">Resposta A:</label>
    <input type="text" name="respostaA" id="respostaA" value="{{isset($registroQ->respostaA)?$registroQ->respostaA:''}}"><br><br>

    <label for="respostaB">Resposta B:</label>
    <input type="text" name="respostaB" id="respostaB" value="{{isset($registroQ->respostaB)?$registroQ->respostaB:''}}"><br><br>

    <label for="respostaC">Resposta C:</label>
    <input type="text" name="respostaC" id="respostaC" value="{{isset($registroQ->respostaC)?$registroQ->respostaC:''}}"><br><br>

    <label for="respostaD">Resposta D:</label>
    <input type="text" name="respostaD" id="respostaD" value="{{isset($registroQ->respostaD)?$registroQ->respostaD:''}}"><br><br>

    <label for="respostaE">Resposta E:</label>
    <input type="text" name="respostaE" id="respostaE" value="{{isset($registroQ->respostaE)?$registroQ->respostaE:''}}"><br><br>
    <select name="respostaCerta" id="respostaCerta">
    <option {{(isset($registroQ->respostaCerta)&&($registroQ->respostaCerta=='A'))?'selected':''}}>A</option>
    <option {{(isset($registroQ->respostaCerta)&&($registroQ->respostaCerta=='B'))?'selected':''}}>B</option>
    <option {{(isset($registroQ->respostaCerta)&&($registroQ->respostaCerta=='C'))?'selected':''}}>C</option>
    <option {{(isset($registroQ->respostaCerta)&&($registroQ->respostaCerta=='D'))?'selected':''}}>D</option>
    <option {{(isset($registroQ->respostaCerta)&&($registroQ->respostaCerta=='E'))?'selected':''}}>E</option>
    </select><br><br>
    <label for="valorTotalQuestao">Valor total da questão:</label>
    <input type="number" name="valorTotalQuestao" id="valorTotalQuestao" value="{{isset($registroQ->valorTotalQuestao)?$registroQ->valorTotalQuestao:''}}"><br><br>

    <button>Atualizar</button>
</form> <br>

</body>
</html>