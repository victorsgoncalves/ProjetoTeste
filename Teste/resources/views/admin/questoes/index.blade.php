<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Questões</title>
</head>
<body>
<h2>Gerenciamento de Questões</h2>

    <a href="{{route('admin.questoes.create')}}">Criar Questões</a><br><br>
    <a href="{{route('admin.testes')}}">Gerenciamento de Testes</a><br><br>

    <h3>{{ Session::get('mensagem') }}</h3><br><br>

    <table border="1">
        <thead>
        <tr>
            <th>#</th>
            <th>Nome da Questão</th>
            <th>Enunciado</th>
            <th>Editar Questão</th>
            <th>Deletar Questão</th>
        </tr>
        </thead>
        <tbody>
        @foreach($registros as $registro)
            @php
                $teste=$registro->find($registro->id)->relTestes;
            @endphp
            <tr>
                <td>{{$registro->id}}</td>
                <td>{{$teste->nome}}</td>
                <td>{{$registro->enunciado}}</td>
                <td><a href="{{route('admin.questoes.edit', $registro->id)}}">Atualizar</a></td>
                <td><a href="{{route('admin.questoes.destroy', $registro->id)}}">Deletar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table><br><br>
</body>
</html>


