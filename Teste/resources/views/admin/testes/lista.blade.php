<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Questões</title>
</head>
<body>

<a href="{{route('admin.testes')}}">Gerenciamento de Testes</a><br><br>
<a href="{{route('admin.questoes')}}">Gerenciamento de Questões</a><br><br>


<h2>Dados do Teste</h2>

    <table border="1">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Pontuação mínima para aprovação</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$teste->nome}}</td>
                <td>{{$teste->pontuacao_minima}}</td>
            </tr>
        </tbody>
    </table>

    <h2>Lista de Questões</h2>

    <table border="1">
        <thead>
        <tr>
            <th>#</th>
            <th>Enunciado</th>
            <th>Resposta A</th>
            <th>Resposta B</th>
            <th>Resposta C</th>
            <th>Resposta D</th>
            <th>Resposta E</th>
            <th>Resposta Certa</th>
            <th>Valor total da Questão</th>
        </tr>
        </thead>
        <tbody>
            @php
                $questoes = $teste->relTestes()->get();
            @endphp
            @foreach($questoes as $questao)
            <tr>
                <td>{{$questao->id}}</td>
                <td>{{$questao->enunciado}}</td>
                <td>{{$questao->respostaA}}</td>
                <td>{{$questao->respostaB}}</td>
                <td>{{$questao->respostaC}}</td>
                <td>{{$questao->respostaD}}</td>
                <td>{{$questao->respostaE}}</td>
                <td>{{$questao->respostaCerta}}</td>
                <td>{{$questao->valorTotalQuestao}}</td>            
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>