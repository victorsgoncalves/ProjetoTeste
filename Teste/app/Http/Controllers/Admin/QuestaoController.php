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
        $registrosQ = Questao::all();
        return view('admin.questoes.index', compact('registrosQ'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.questoes.create');
    }

   
    public function store(Request $request)
    {
        $dadosQ = $request->all();
        Questao::create($dadosQ);
        return redirect()->route('admin.questoes');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $registroQ = Questao::find($id);
        return view('admin.questoes.edit', compact('registroQ'));
    }

    public function update(Request $request, $id)
    {
        $dadosQ = $request->all();
        Questao::find($id)->update($dadosQ);

        return redirect()->route('admin.questoes');
    }

    public function destroy($id)
    {
        Questao::find($id)->delete();
        return redirect()->route('admin.questoes');
    }
}