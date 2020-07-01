@extends('admin.layouts.app')
@section('content')

    <div class="row align-items-center">
        <div class="col-sm text-secondary">
            <br><h2>Listagem de Testes e sua Questões</h2><br>

            <hr>

            <h2>Dados do Teste</h2><br>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-borderless">
            <thead class="thead-dark">
            <tr>
                <th>Nome</th>
                <th>Pontuação mínima para aprovação</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$teste->nome}}</td>
                    <td>{{$teste->pontuacao_minima}}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <hr>

    <div class="col-sm text-secondary">
        <br><h2>Lista de Questões</h2><br>
    </div>
    <div class="table-responsive">
    <table class="table table-striped table-borderless">
        <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Enunciado</th>
            <th>Resposta A</th>
            <th>Resposta B</th>
            <th>Resposta C</th>
            <th>Resposta D</th>
            <th>Resposta E</th>
            <th>Resposta Certa</th>
            <th>Valor total da Questão</th>
        </tr>
        </thead>
        <tbody>
        @if($teste->user == Auth::user()->id)
            @php
                $questoes = $teste->relTestes()->get();
            @endphp
            @foreach($questoes as $questao)
            <tr>
                <td>{{$questao->id}}</td>
                <td>{{$questao->enunciado}}</td>
                <td>{{$questao->respostaA}}</td>
                <td>{{$questao->respostaB}}</td>
                <td>{{$questao->respostaC}}</td>
                <td>{{$questao->respostaD}}</td>
                <td>{{$questao->respostaE}}</td>
                <td>{{$questao->respostaCerta}}</td>
                <td>{{$questao->valorTotalQuestao}}</td>            
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>

    <br>
    <hr>
    <br>

    </div>
@endsection