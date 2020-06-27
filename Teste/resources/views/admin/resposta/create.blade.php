<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Responder Questões</title>
</head>
<body>
            @php
                $questoes = $teste->relTestes()->get();
            @endphp
            @foreach($questoes as $questao)
        <h2>Questionario de {{$Teste->nome}}: </h2>  
        
        <h3>Pergunta:</h3>
        
        {{$questao->enunciado}} <br><br>                  
        
<br>    <input type="radio" name="respostaA"  value="respostaA">{{$questao->respostaA}}<br>
        <input type="radio" name="respostaB"  value="respostaB">{{$questao->respostaB}}<br>
        <input type="radio" name="respostaC"  value="respostaC">{{$questao->respostaC}}<br>
        <input type="radio" name="respostaD"  value="respostaD">{{$questao->respostaD}}<br>
        <input type="radio" name="respostaE"  value="respostaE">{{$questao->respostaE}}<br><br>      
        @endforeach
        <form action="" method="POST">
        <input type="submit" value="Responder">
        </form>
    <br><br>
</body>
</html>