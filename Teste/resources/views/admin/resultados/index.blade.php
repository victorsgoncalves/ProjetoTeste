@extends('admin.layouts.app')
@section('content')

<div class="row align-items-center">
        <div class="col-sm text-secondary">
            <br><br><h2>Resultado do Teste de {{ Auth::user()->name }}</h2><br><br>
            @if(Session::get('aprovado'))
                <div class="alert alert-success" role="alert">
                    <h3>{{ Session::get('aprovado') }}</h3>
                </div>
            @elseif(Session::get('reprovado'))
                <div class="alert alert-danger" role="alert">
                    <h3>{{ Session::get('reprovado') }}</h3>
                </div>
            @endif
        </div>
    </div>
    
@endsection