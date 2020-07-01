@extends('admin.layouts.app')
@section('content')

<div class="col-sm text-secondary">
    <br><h2>Efetuar Login</h2><br>
</div>

@if(Session::get('mensagem'))
    <div class="alert alert-info" role="alert">
        <h3>{{ Session::get('mensagem') }}</h3>
    </div>
@endif

<form action="{{route('admin.usuarios.entrar')}}" method="post">
@csrf

    <div class="form-group">
        <label for="email">Email:</label><br>
        <input type="text" name="email" id="email" class="form-control" placeholder="Digite o seu email..."><br><br>
    </div>
    <div class="form-group">
        <label for="senha">Senha:</label><br>
        <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite a sua senha..."><br><br>
    </div>

    <button class="btn btn-success flot-right">Entrar</button>

</form>

@endsection