@extends('admin.layouts.app')
@section('content')

<div class="text-secondary">
    <br><h2>Atualizar Testes</h2><br>
</div>

<form action="{{route('admin.testes.update', $registro->id)}}" method="POST">
        @csrf
    <input type="hidden" name="_method" value="put">

    <div class="form-group">
        <label for="user">Usuário:</label>
        <h3 class="btn btn-light flot-right" for="user">{{Auth::user()->name}}</h3>
        <input type="hidden" name="user" value="{{Auth::user()->id}}">
    </div>
        
    <div class="form-group">
        <label for="nome">Nome</label><br>
        <input type="text" name="nome" id="nome" class="form-control" value="{{isset($registro->nome)?$registro->nome:''}}"><br><br>
    </div>
        
    <div class="form-group">
        <label for="pontuacao_minima">Pontuação mínima para aprovação:</label><br>
        <input type="number" name="pontuacao_minima" id="pontuacao_minima" class="form-control" value="{{isset($registro->pontuacao_minima)?$registro->pontuacao_minima:''}}"><br><br>
    </div>

    <button class="btn btn-warning flot-right">Atualizar</button>

</form>
    
@endsection