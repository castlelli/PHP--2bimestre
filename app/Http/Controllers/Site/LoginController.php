<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPUnit\Metadata\Uses;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function entrar(Request $req)
    {
        $dados = $req->all();

        // compara email e pass de ‘users’ com
        // email e senha digitado

        if (Auth::attempt([
            'email' => $dados['email'],

            'password' => $dados['senha']
        ])) {
            // redireciona para a home, mas agora, logado !

            return redirect()->route('site.home');
        } else { // pede usuario e senha novamente
            return redirect()->route('login');
        }
    }
    public function sair()
    {
        Auth::logout();
        return redirect()->route('site.home');
    }
}
