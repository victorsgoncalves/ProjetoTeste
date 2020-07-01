@extends('admin.layouts.app')
@section('content')

    <div class="row align-items-center">
        <div class="col-sm text-secondary">
            <br><h2>Gerenciamento de Questões</h2><br>

            <a href="{{route('admin.questoes.create')}}" class="btn btn-secondary flot-right">Criar Questões</a><br><br>
        </div>

        <div class="col-sm">
            @if(Session::get('mensagem'))
            <div class="alert alert-info" role="alert">
                <h3>{{ Session::get('mensagem') }}</h3>
            </div>
            @endif
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
            @if (Auth::check())     
                @foreach($registros as $registro)
                    @php
                        $dado=$registro->find($registro->id)->relTestes;
                    @endphp
                        @if($dado->user == Auth::user()->id)
                            <tr>
                                <td>{{$registro->id}}</td>
                                <td>{{$dado->nome}}</td>
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


