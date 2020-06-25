<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Questao;
use App\Teste;

class QuestaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Questao::all();
        return view('admin.questoes.index', compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $registros = Teste::all();
        $respostas = ['A','B','C','D','E'];
        return view('admin.questoes.create', compact('registros', 'respostas'));
    }

   
    public function store(Request $request)
    {
        $dados = $request->all();
        Questao::create($dados);
        return redirect()->route('admin.questoes')->with(array('mensagem'=>'Questão cadastrada com sucesso!'));
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $registros = Questao::find($id);
        $testes = Teste::all();
        $respostas = ['A','B','C','D','E'];
        return view('admin.questoes.edit', compact('registros', 'testes', 'respostas'));
    }

    public function update(Request $request, $id)
    {
        $dados = $request->all();
        Questao::find($id)->update($dados);

        return redirect()->route('admin.questoes')->with(array('mensagem'=>'Questão atualizada com sucesso!'));
    }

    public function destroy($id)
    {
        Questao::find($id)->delete();
        return redirect()->route('admin.questoes')->with(array('mensagem'=>'Questão deletada com sucesso!'));
    }
}