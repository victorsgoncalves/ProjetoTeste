<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Responder Teste</title>
</head>
<body>
    <h1>Responder o Teste</h1>
    <h2>Nome do Teste: {{$teste->nome}}</h2>
    <h3>Pontuação mínima para aprovação: {{$teste->pontuacao_minima}}</h3>

    @php
        $questoes = $teste->relTestes()->get();
        $num = 0;
    @endphp

    <form action="{{route('admin.resultado.resposta', $teste->id)}}" method="post">
    @csrf    

    @foreach($questoes as $questao)
    
    @php
        $num += 1;
    @endphp
    
        <h3>Questão {{$num}}: {{ $questao->enunciado }}</h3>

        <p> a) <input type="Radio" name="questao{{ $num }}" value="A">
            {{ $questao->respostaA }}
        </p></br>
        <p>b) <input type="Radio" name="questao{{ $num }}" value="B">
            {{ $questao->respostaB }}
        </p></br>
        <p>c) <input type="Radio" name="questao{{ $num }}" value="C">
            {{ $questao->respostaC }}
        </p></br>
        <p>d) <input type="Radio" name="questao{{ $num }}" value="D">
            {{ $questao->respostaD }}            
        </p></br>
        <p>e) <input type="Radio" name="questao{{ $num }}" value="E">
            {{ $questao->respostaE }}            
        </p></br>

        <p>Valor total da questão: {{ $questao->valorTotalQuestao }}</p>

        <hr><br>

    @endforeach

    <button>Enviar respostas</button><br>

    </form>

</body>
</html>