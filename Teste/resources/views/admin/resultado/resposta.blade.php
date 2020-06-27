<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Testes</title>
</head>
<body>
<h2>Resultado do Teste de {{ $teste->nome }}</h2>

    <a href="{{route('admin.testes')}}">Gerenciamento de Testes</a><br><br>

    <h3>{{ Session::get('mensagem') }}</h3><br><br>

    <table border="1">
        <thead>
        <tr>
            <th>Questão</th>
            <th>Número de Acertos</th>
            <th>Número de Erros</th>
            <th>Nota final</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
