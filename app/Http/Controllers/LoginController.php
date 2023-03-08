<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function LoginForm(){
        return view('auth.login');
       
    }
//esta funcao executa o termino da sessao, caso o usuario nao estiver logado a funcao nao sera executada
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    // inicio de sessao
    public function login(Request $request){
     //    $data = $request->only('email', 'Password');//recuperando os dois valores do formulario
    //dd($request->all());
    
     $data = Auth::attempt([
        
        'email' =>$request->email,
        'password'=>$request->password

     ]);

    if($data){
    
        return redirect('/');
    }
    return redirect()->back();// redirecionamento para a pagina anterior
    }

   
}
