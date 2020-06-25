<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Teste;

class TesteController extends Controller
{
    public function index()
    {
        $registros = Teste::all();
        return view('admin.testes.index', compact('registros'));
    }

    public function create(Request $request)
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
        //dd(Teste::findOrFail($id));
    }

    public function edit($id)
    {
        $registro = Teste::find($id);
        return view('admin.testes.edit', compact('registro'));
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
}
