@extends('admin.layouts.app')
@section('content')

    <div class="row align-items-center">
            <div class="col-sm">
                <h2>Gerenciamento de Testes</h2>

                <a href="{{route('admin.testes.create')}}" class="btn btn-secondary flot-right">Criar Testes</a><br><br>
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
                <th>Nome</th>
                <th>Responder Teste</th>
                <th>Editar Teste</th>
                <th>Listagem de Questões</th>
                <th>Deletar Teste</th>
            </tr>
            </thead>
            <tbody>
            @if (Auth::check())                  
                @foreach($registros as $registro)
                    <tr>                    
                        <td>{{$registro->id}}</td>
                        <td>{{$registro->nome}}</td>
                        @if($registro->user != Auth::user()->id)
                        <td><a href="{{route('admin.resultado.responder', $registro->id)}}" class="btn btn-primary flot-right">Responder Teste</a></td>
                        @endif
                        @if($registro->user == Auth::user()->id)
                        <td></td>
                        <td><a href="{{route('admin.testes.edit', $registro->id)}}" class="btn btn-warning flot-right">Atualizar</a></td>                        
                        <td><a href="{{route('admin.testes.lista', $registro->id)}}" class="btn btn-info flot-right">Lista de Questões</a></td>
                        <td><a href="{{route('admin.testes.destroy', $registro->id)}}" class="btn btn-danger flot-right">Deletar</a></td>
                        @endif
                        
                    </tr>
                    
                @endforeach
            @endif
            </tbody>
        </table>
    </div>

@endsection


