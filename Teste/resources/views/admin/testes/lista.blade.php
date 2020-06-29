@extends('admin.layouts.app')
@section('content')

    <div class="row align-items-center">
        <div class="col-sm">
            <h2>Listagem de Testes e sua Questões</h2>

            <a href="{{route('admin.testes')}}"  class="btn btn-secondary  flot-right">Gerenciamento de Testes</a><br><br>
            <a href="{{route('admin.questoes')}}"  class="btn btn-secondary  flot-right">Gerenciamento de Questões</a><br><br>
        
            <h2>Dados do Teste</h2>
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

    <h2>Lista de Questões</h2>
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
        </tbody>
    </table>
    </div>
@endsection