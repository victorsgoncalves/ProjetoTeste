<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('/index');
    }

    public function entrar(Request $request){

        $dados = $request->all();
        if(Auth::attempt(['email'=>$dados['email'], 'password'=>$dados['senha']])){
            return redirect()->route('admin.testes');
        }
 
        return redirect()->route('admin.usuarios');        
    }

    public function sair(){
        Auth::logout();
        return redirect()->route('admin.usuarios');
    }

    public function registrar(){
        return view('admin.usuarios.registrar');
    }

    public function cadastrar(Request $request){
        
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

        return redirect()->route('admin.usuarios')->with(array('mensagem'=>'Usuário cadastrado com sucesso!'));
    }
}
