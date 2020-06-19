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

    <table border="1">
        <thead>
        <tr>
            <th>#</th>
            <th>Enunciado</th>
            <th>Editar Questão</th>
            <th>Deletar Questão</th>
        </tr>
        </thead>
        <tbody>
        @foreach($registrosQ as $registroQ)
            <tr>
                <td>{{$registroQ->id}}</td>
                <td>{{$registroQ->enunciado}}</td>
                <td><a href="{{route('admin.questoes.edit', $registroQ->id)}}">Atualizar</a></td>
                <td><a href="{{route('admin.questoes.destroy', $registroQ->id)}}">Deletar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>


