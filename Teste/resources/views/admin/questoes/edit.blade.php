@extends('admin.layouts.app')
@section('content')

<div class="text-secondary">
    <br><h2>Atualizar Questões</h2><br>
</div>

<form action="{{route('admin.questoes.update', $registros->id)}}" method="post">
@csrf
    <input type="hidden" name="_method" value="put">

    <div class="form-group">
        <label for="enunciado">Enunciado: </label><br>
        <textarea name="enunciado" id="enunciado" cols="30" rows="10" class="form-control">{{isset($registros->enunciado)?$registros->enunciado:''}}</textarea><br><br>
    </div>

    <div class="form-group">
        <label for="teste">Teste:</label>
        <select name="teste" id="teste" class="form-control">
        @php
            $dado=$registros->find($registros->id)->relTestes;
        @endphp
        <option value="{{$registros->teste}}"
            @if(isset($registros) && ($registros->teste == $dado->id))
                selected
            @endif       
        >{{ $dado->nome }}</option>
        @foreach($testes as $teste)
        @if($teste->user == Auth::user()->id)
        <option value="{{$teste->id}}">{{$teste->nome}}</option>
        @endif
        @endforeach
        </select><br><br>
    </div>

    <div class="form-group">
        <label for="respostaA">Resposta A:</label>
        <input type="text" name="respostaA" id="respostaA" class="form-control" value="{{isset($registros->respostaA)?$registros->respostaA:''}}"><br><br>
    </div>

    <div class="form-group">
        <label for="respostaB">Resposta B:</label>
        <input type="text" name="respostaB" id="respostaB" class="form-control" value="{{isset($registros->respostaB)?$registros->respostaB:''}}"><br><br>
    </div>

    <div class="form-group">
        <label for="respostaC">Resposta C:</label>
        <input type="text" name="respostaC" id="respostaC" class="form-control" value="{{isset($registros->respostaC)?$registros->respostaC:''}}"><br><br>
    </div>

    <div class="form-group">
        <label for="respostaD">Resposta D:</label>
        <input type="text" name="respostaD" id="respostaD" class="form-control" value="{{isset($registros->respostaD)?$registros->respostaD:''}}"><br><br>
    </div>

    <div class="form-group">
        <label for="respostaE">Resposta E:</label>
        <input type="text" name="respostaE" id="respostaE" class="form-control" value="{{isset($registros->respostaE)?$registros->respostaE:''}}"><br><br>
    </div>

    <div class="form-group">
        <label for="respostaCerta">Resposta Certa:</label>
        <select name="respostaCerta" id="respostaCerta" class="form-control">
        @foreach($respostas as $resposta)
        <option value="{{$resposta}}"
            @if(isset($registros) && $registros->respostaCerta == $resposta)
                selected
            @endif
        >{{ $resposta }}</option>
        @endforeach
        </select><br><br>
    </div>

    <div class="form-group">
        <label for="valorTotalQuestao">Valor total da questão:</label>
        <input type="number" name="valorTotalQuestao" id="valorTotalQuestao" class="form-control" value="{{isset($registros->valorTotalQuestao)?$registros->valorTotalQuestao:''}}"><br><br>
    </div>

    <button  class="btn btn-warning flot-right">Atualizar</button><br><br>
</form>

@endsection