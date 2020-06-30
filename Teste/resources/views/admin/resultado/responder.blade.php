@extends('admin.layouts.app')
@section('content')

    <h2>Responder o Teste</h2>

    <div class="p-3 mb-2 bg-secondary text-white">
        Nome do Teste: {{$teste->nome}}
    </div>
    <div class="p-3 mb-2 bg-secondary text-white">
        Pontuação mínima para aprovação: {{$teste->pontuacao_minima}}
    </div>


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
    <div class="p-3 mb-2 bg-light text-dark">
            <p><b>Questão {{$num}}:</b></p> {{ $questao->enunciado }}
    </div>    
    
    <div class="form-check">
        <p> a) <input type="Radio" name="questao{{ $num }}" value="A">
            {{ $questao->respostaA }}
        </p>
    </div>

    <div class="form-check">
        <p>b) <input type="Radio" name="questao{{ $num }}" value="B">
            {{ $questao->respostaB }}
        </p>
    </div>

    <div class="form-check">
        <p>c) <input type="Radio" name="questao{{ $num }}" value="C">
            {{ $questao->respostaC }}
        </p>
    </div>

    <div class="form-check">
        <p>d) <input type="Radio" name="questao{{ $num }}" value="D">
            {{ $questao->respostaD }}            
        </p>
    </div>

    <div class="form-check">
        <p>e) <input type="Radio" name="questao{{ $num }}" value="E">
            {{ $questao->respostaE }}            
        </p>
    </div>

    <div class="p-3 mb-2 bg-info text-white">
        Valor total da questão: {{ $questao->valorTotalQuestao }}
    </div>


    <hr><br>

    @endforeach

    <button class="btn btn-primary flot-right">Enviar respostas</button><br>

</form>

@endsection