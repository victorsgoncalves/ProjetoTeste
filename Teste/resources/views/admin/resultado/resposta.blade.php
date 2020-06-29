@extends('admin.layouts.app')
@section('content')

    <div class="row align-items-center">
        <div class="col-sm">
            <h2>Resultado do Teste de {{ $teste->nome }}</h2>

            <a href="{{route('admin.testes')}}" class="btn btn-secondary  flot-right">Gerenciamento de Testes</a><br><br>


            <div class="alert alert-info" role="alert">
                <h3>{{ Session::get('mensagem') }}</h3>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-borderless">
            <thead class="thead-dark">
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
    </div>
@endsection