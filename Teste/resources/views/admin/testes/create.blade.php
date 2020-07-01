@extends('admin.layouts.app')
@section('content')

<div class="text-secondary">
    <br><h2>Cadastro de Testes</h2><br>
</div>

<form action="{{route('admin.testes.store')}}" method="post">
@csrf
    
    <div class="form-group">
        <label for="user">Usuário:</label>
        <h3 class="btn btn-light flot-right" for="user">{{Auth::user()->name}}</h3>
        <input type="hidden" name="user" value="{{Auth::user()->id}}">
    </div>

    <div class="form-group">
        <label for="nome">Nome</label><br>
        <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome do Teste..."><br><br>
    </div>
    <div class="form-group">
        <label for="pontuacao_minima">Pontuação mínima para aprovação:</label><br>
        <input type="number" name="pontuacao_minima" id="pontuacao_minima" class="form-control" placeholder="Digite o pontuação mínima para aprovação do Teste..."><br><br>
    </div>

    <button class="btn btn-primary flot-right">Salvar</button>

</form>

@endsection




