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

<form action="{{route('admin.questoes.update', $registros->id)}}" method="post">
@csrf
<input type="hidden" name="_method" value="put">

    <label for="enunciado">Enunciado: </label><br>
    <textarea name="enunciado" id="enunciado" cols="30" rows="10">{{isset($registros->enunciado)?$registros->enunciado:''}}</textarea><br><br>

    <label for="teste">Teste:</label>
    <select name="teste" id="teste">
    @php
        $dado=$registros->find($registros->id)->relTestes;
    @endphp
    <option value="{{$registros->teste}}"
        @if(isset($registros) && ($registros->teste == $dado->id))
            selected
        @endif       
    >{{ $dado->nome }}</option>
    @foreach($testes as $teste)
    <option value="{{$teste->id}}">{{$teste->nome}}</option>
    @endforeach
    </select><br><br>

    <label for="respostaA">Resposta A:</label>
    <input type="text" name="respostaA" id="respostaA" value="{{isset($registros->respostaA)?$registros->respostaA:''}}"><br><br>

    <label for="respostaB">Resposta B:</label>
    <input type="text" name="respostaB" id="respostaB" value="{{isset($registros->respostaB)?$registros->respostaB:''}}"><br><br>

    <label for="respostaC">Resposta C:</label>
    <input type="text" name="respostaC" id="respostaC" value="{{isset($registros->respostaC)?$registros->respostaC:''}}"><br><br>

    <label for="respostaD">Resposta D:</label>
    <input type="text" name="respostaD" id="respostaD" value="{{isset($registros->respostaD)?$registros->respostaD:''}}"><br><br>

    <label for="respostaE">Resposta E:</label>
    <input type="text" name="respostaE" id="respostaE" value="{{isset($registros->respostaE)?$registros->respostaE:''}}"><br><br>
    
    <label for="respostaCerta">Resposta Certa:</label>
    <select name="respostaCerta" id="respostaCerta">
    @foreach($respostas as $resposta)
    <option value="{{$resposta}}"
        @if(isset($registros) && $registros->respostaCerta == $resposta)
            selected
        @endif
    >{{ $resposta }}</option>
    @endforeach
    </select><br><br>
    
    <label for="valorTotalQuestao">Valor total da questão:</label>
    <input type="number" name="valorTotalQuestao" id="valorTotalQuestao" value="{{isset($registros->valorTotalQuestao)?$registros->valorTotalQuestao:''}}"><br><br>

    <button>Atualizar</button>
</form> <br>

</body>
</html>