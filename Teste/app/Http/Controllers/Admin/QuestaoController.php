<?php

namespace App\Http\Controllers;

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
       //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $registros = Teste::all();
        return view('admin.testes.index', compact('registros'));
    }

   
    public function store(Request $request, $id)
    {
        $dados = $request->all();
        Questao::create($dados);

        return redirect()->route('admin.questoes');

    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $registro = Questao::find($id);
        return view('admin.questoes.edit', compact('registro'));
    }

    public function update(Request $request, $id)
    {
        $dados = $request->all();
        Questao::find($id)->update($dados);

        return redirect()->route('admin.questoes');
    }

    public function destroy($id)
    {
        Questao::find($id)->delete();
        return redirect()->route('admin.questoes')->with('alert-success','Questão deletada com sucesso!');
    }
}