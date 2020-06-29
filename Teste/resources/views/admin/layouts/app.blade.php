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
    <a href="{{route('admin.testes')}}" class="navbar-brand text-light">Testes Acadêmicos</a>
</nav>

<div class="container">
    @yield('content')
</div>


</body>
</html>
