@extends('admin.layouts.app')
@section('content')

<h2>Cadastrar Questões</h2>

<form action="{{route('admin.questoes.store')}}" method="post">
@csrf

    <div class="form-group">
        <label for="enunciado">Enunciado: </label><br>
        <textarea name="enunciado" id="enunciado" cols="30" rows="10" class="form-control" placeholder="Digite o enunciado da questão..."></textarea><br><br>
    </div>

    <div class="form-group">
        <label for="teste">Teste:</label>
        <select name="teste" id="teste" class="form-control">
            <option value="">Selecione</option>
            @foreach($registros as $registro)
                <option value="{{$registro->id}}">{{$registro->nome}}</option>
            @endforeach
        </select><br><br>
    </div>

    <div class="form-group">
        <label for="respostaA">Resposta A:</label>
        <input type="text" name="respostaA" id="respostaA" class="form-control" placeholder="Digite a alternativa A..."><br><br>
    </div>

    <div class="form-group">
        <label for="respostaB">Resposta B:</label>
        <input type="text" name="respostaB" id="respostaB" class="form-control" placeholder="Digite a alternativa B..."><br><br>
    </div>

    <div class="form-group">
        <label for="respostaC">Resposta C:</label>
        <input type="text" name="respostaC" id="respostaC" class="form-control" placeholder="Digite a alternativa C..."><br><br>
    </div>

    <div class="form-group">
        <label for="respostaD">Resposta D:</label>
        <input type="text" name="respostaD" id="respostaD" class="form-control" placeholder="Digite a alternativa D..."><br><br>
    </div>

    <div class="form-group">
        <label for="respostaE">Resposta E:</label>
        <input type="text" name="respostaE" id="respostaE" class="form-control" placeholder="Digite a alternativa E..."><br><br>
    </div>

    <div class="form-group">
        <label for="respostaCerta">Resposta Correta:</label>
        <select name="respostaCerta" id="respostaCerta"  class="form-control">
        <option value="">Selecione</option>
        @foreach($respostas as $resposta)
        <option>{{$resposta}}</option>
        @endforeach
        </select><br><br>

    <div class="form-group">
        <label for="valorTotalQuestao">Valor total da questão:</label>
        <input type="number" name="valorTotalQuestao" id="valorTotalQuestao" class="form-control" placeholder="Digite o valor total da questão..."><br><br>
    </div>

    <button class="btn btn-primary flot-right">Salvar</button>
</form>

@endsection


