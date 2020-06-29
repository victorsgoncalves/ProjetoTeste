<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Teste;
use App\User;

class TesteController extends Controller
{
    public function index()
    {
        $registros = Teste::all();
        return view('admin.testes.index', compact('registros'));
    }

    public function create()
    {
        return view('admin.testes.create');
    }

    public function store(Request $request)
    {
        $dados = $request->all();
        Teste::create($dados);

        return redirect()->route('admin.testes')->with(array('mensagem'=>'Teste cadastrado com sucesso!'));

    }

    public function show($id)
    {
        $teste = Teste::find($id);
        return view('admin.testes.lista', compact('teste'));
    }

    public function edit($id)
    {
        $registro = Teste::find($id);
        $usuario = User::all();
        return view('admin.testes.edit', compact('registro', 'usuario'));
    }

    public function update(Request $request, $id)
    {
        $dados = $request->all();
        Teste::find($id)->update($dados);

        return redirect()->route('admin.testes')->with(array('mensagem'=>'Teste atualizado com sucesso!'));   
    }

    public function destroy($id)
    {
        Teste::find($id)->delete();
        return redirect()->route('admin.testes')->with(array('mensagem'=>'Teste deletado com sucesso!')); 
    }

    public function responder($id)
    {
        $teste = Teste::find($id);
        return view('admin.resultado.responder', compact('teste'));    
    }

    public function resposta(Request $request)
    {
        $dados = $request->all();

        return view('admin.resultado.resposta', compact('dados'))->with(array('mensagem'=>'Resposta enviada com sucesso!'));

    }

}
