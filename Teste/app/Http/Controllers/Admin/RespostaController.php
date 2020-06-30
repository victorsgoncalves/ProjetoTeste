<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Teste;

class RespostaController extends Controller
{
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
