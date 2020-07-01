@extends('admin.layouts.app')
@section('content')

<div class="col-sm text-secondary">
    <br><h2>Cadastro de Usuário</h2><br>
</div>


<form action="{{route('admin.usuarios.cadastrar')}}" method="post">
@csrf

    <div class="form-group">
        <label for="name">Nome:</label><br>
        <input type="text" name="name" id="name" class="form-control" placeholder="Digite o seu nome..."><br><br>
    </div>

    <div class="form-group">
        <label for="email">Email:</label><br>
        <input type="text" name="email" id="email" class="form-control" placeholder="Digite o seu email..."><br><br>
    </div>

    <div class="form-group">
        <label for="password">Senha:</label><br>
        <input type="password" name="password" id="password" class="form-control" placeholder="Digite a sua senha..."><br><br>
    </div>

    <button class="btn btn-primary flot-right">Salvar Usuário</button><br><br>

</form>

@endsection