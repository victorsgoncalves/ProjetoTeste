<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Teste;
use Auth;

class RespostaController extends Controller
{
    public function index(){
        return view('admin.resultados.index');
    }

    public function responder($id){
        $teste = Teste::find($id);
        return view('admin.resultados.responder', compact('teste'));
    }

    public function resposta(Request $request, $id){
        $registros = $request->all();
        $usuario = Auth::user()->name;
        $teste = Teste::find($id);
        $nome = $teste->nome;
        $pontuacao_minima = $teste->pontuacao_minima;
        $notaFinal = 0;
        $num = 0;
        

        do{
            $num += 1;
         
            $questao = $request['questao'.$num];
            
            $respostaCerta = $request['respostaCerta'.$num];

            $valorTotalQuestao = $request['valorTotalQuestao'.$num];
         
            if($questao == $respostaCerta)
                $notaFinal += $valorTotalQuestao;
        }while($num < $request['num']);


        if($notaFinal >= $pontuacao_minima)
            return redirect()->route('admin.resultados')->with(array('aprovado'=>'Parabéns '.$usuario.' você está Aprovada no teste de '.$nome.'. Sua nota foi '.$notaFinal.'!'));


        return redirect()->route('admin.resultados')->with(array('reprovado'=>'Infelizmente '.$usuario.' você está Reprovado no teste de '.$nome.'. Sua nota foi '.$notaFinal.'!'));
    }
}
