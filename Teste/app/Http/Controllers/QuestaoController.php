<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Questao;

class QuestaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('teste');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $questao = new Questao();
        $questao->id = $request->id;
        $questao->teste = $request->teste;
        $questao->enunciado = $request->enunciado;
        $questao->respostaA = $request->respostaA;
        $questao->respostaB = $request->respostaB;
        $questao->respostaC = $request->respostaC;
        $questao->respostaD = $request->respostaD;
        $questao->respostaE = $request->respostaE;
        $questao->respostaCerta = $request->respostaCerta;
        $questao->valorTotalQuestao = $request->valorTotalQuestao;
        $questao-> save();
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
