@extends('admin.layouts.app')
@section('content')

<form action="{{route('admin.resultados.resposta', $teste->id)}}" method="post">
@csrf
    <div class="text-secondary">
        <br><br><h2>Responder o Teste</h2><br>
    </div>

    <div class="p-3 mb-2 bg-secondary text-white">
        <b><h4>Nome do Teste:</h4></b> {{$teste->nome}}
    </div>
    <div class="p-3 mb-2 bg-secondary text-white">
    <b><h4>Pontuação mínima para aprovação:</h4></b> {{$teste->pontuacao_minima}}
    </div>

    <br>

    @php
        $questoes = $teste->relTestes()->get();
        $num=0
    @endphp    

    @foreach($questoes as $questao)
    
    @php
        $num += 1;
    @endphp
    <div class="p-3 mb-2 bg-light text-dark">
            <p><b>Questão {{$num}}:</b></p> {{ $questao->enunciado }}
    </div>    
    
    <div class="form-check">
        <p><b> a)</b> <input type="Radio" name="questao{{ $num }}" value="A">
            {{ $questao->respostaA }}
        </p>
    </div>

    <div class="form-check">
        <p><b> b)</b> <input type="Radio" name="questao{{ $num }}" value="B">
            {{ $questao->respostaB }}
        </p>
    </div>

    <div class="form-check">
        <p><b> c)</b> <input type="Radio" name="questao{{ $num }}" value="C">
            {{ $questao->respostaC }}
        </p>
    </div>

    <div class="form-check">
        <p><b> d)</b> <input type="Radio" name="questao{{ $num }}" value="D">
            {{ $questao->respostaD }}            
        </p>
    </div>

    <div class="form-check">
        <p><b> e)</b> <input type="Radio" name="questao{{ $num }}" value="E">
            {{ $questao->respostaE }}            
        </p>
    </div>

    <div class="p-3 mb-2 bg-info text-white">
        Valor total da questão: 
        <input type="text" name="valorTotalQuestao{{ $num }}" class="btn btn-info flot-right" readonly="readonly" value="{{ $questao->valorTotalQuestao }}">
    </div>

    <input type="hidden" name="respostaCerta{{ $num }}" value="{{$questao->respostaCerta}}">
    <hr><br>

    @endforeach

    <input type="hidden" name="num" value="{{$num}}">

    <button class="btn btn-primary flot-right">Enviar respostas</button><br><br>

</form>

@endsection