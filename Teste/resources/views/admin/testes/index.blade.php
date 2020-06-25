<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Testes</title>
</head>
<body>
<h2>Gerenciamento de Testes</h2>

            <a href="{{route('admin.testes.create')}}">Criar Testes</a><br><br>
            <a href="{{route('admin.questoes')}}">Gerenciamento de Questões</a><br><br>

            <h3>{{ Session::get('mensagem') }}</h3><br><br>

    <table border="1">
        <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Editar Teste</th>
            <th>Deletar Teste</th>
        </tr>
        </thead>
        <tbody>
        @foreach($registros as $registro)
            <tr>
                <td>{{$registro->id}}</td>
                <td>{{$registro->nome}}</td>
                <td><a href="{{route('admin.testes.edit', $registro->id)}}">Atualizar</a></td>
                <td><a href="{{route('admin.testes.destroy', $registro->id)}}">Deletar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>


