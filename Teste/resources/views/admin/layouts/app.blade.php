<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Gerenciador de Testes</title>
</head>
<body>
<nav class="navbar navbar-expanded-lg navbar-secondary bg-secondary">
    <div class="container">
    <ul class="letf hide-on-med-and-down">
        <h1><a href="{{route('admin.usuarios')}}" class="navbar-brand text-light">Testes Acadêmicos</a></h1>
    </ul>
        <ul class="right hide-on-med-and-down">
            @if(Auth::guest())
                <a href="{{route('admin.usuarios')}}" class="btn btn-success flot-right">Entrar</a>
                <a href="{{route('admin.usuarios.registrar')}}" class="btn btn-primary flot-right">Registre-se</a>
            @else
                <a href="#" class="navbar-brand text-light">Bem vindo(a): {{Auth::user()->name}}</a>
                <a href="{{route('admin.testes')}}" class="btn btn-info flot-right">Gerenciamento de Testes</a>
                <a href="{{route('admin.questoes')}}" class="btn btn-info flot-right">Gerenciamento de Questões</a>
                <a href="{{route('admin.usuarios.sair')}}" class="btn btn-danger flot-right">Sair</a>
            @endif
        </ul>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>


</body>
</html>
