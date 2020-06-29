@extends('admin.layouts.app')
@section('content')

    <div class="row align-items-center">
        <div class="col-sm">
            <h2>Gerenciamento de Questões</h2>

            <a href="{{route('admin.questoes.create')}}" class="btn btn-secondary flot-right">Criar Questões</a><br><br>
            <a href="{{route('admin.testes')}}" class="btn btn-secondary  flot-right">Gerenciamento de Testes</a><br><br>
        </div>

        <div class="col-sm">
            <div class="alert alert-info" role="alert">
                <h3>{{ Session::get('mensagem') }}</h3>
            </div>
        </div>
    </div>
    
    <div class="table-responsive">
        <table class="table table-striped table-borderless">
            <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Nome da Questão</th>
                <th>Enunciado</th>
                <th>Editar Questão</th>
                <th>Deletar Questão</th>
            </tr>
            </thead>
            <tbody>
            @if(Auth::check())
            @foreach($registros as $registro)
            @if($registro->user == Auth::user()->id)
                @php
                    $teste=$registro->find($registro->id)->relTestes;
                @endphp
                <tr>
                    <td>{{$registro->id}}</td>
                    <td>{{$teste->nome}}</td>
                    <td>{{$registro->enunciado}}</td>
                    <td><a href="{{route('admin.questoes.edit', $registro->id)}}"  class="btn btn-warning flot-right">Atualizar</a></td>
                    <td><a href="{{route('admin.questoes.destroy', $registro->id)}}" class="btn btn-danger flot-right">Deletar</a></td>
                </tr>
            @endif
            @endforeach
            @endif
            </tbody>
        </table>
    </div>

@endsection


