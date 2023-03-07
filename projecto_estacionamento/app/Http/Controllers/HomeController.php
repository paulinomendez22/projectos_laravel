<?php

namespace App\Http\Controllers;
use App\Models\Home;
use App\Models\Reservas;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    //
    public function tiket()
    {
        $dados = Reservas::all();
        return view('estacionamento.tiket', compact('dados'));
    }

    public function home()
    {
        return view('estacionamento.home');
    }

    public function vagas()
    {
        return view('estacionamento.vagas');
    }
    
    public function reservas()
    {
        return view('estacionamento.reservas');
    }

    public function criar(Request $request)
    {
        $produto = Home::create([
            'email' => $request->email,
            'senha' => Hash::make($request->senha),
        ]);
        return redirect('/reservas')->with('msg',' Usuário Cadastrado com Sucesso!');
    }

    public function reservar(Request $request)
    {
        $produto = Reservas::create([
            'marca' => $request->marca,
            'nome' => $request->nome,
            'apelido' => $request->apelido,
            'placa' => $request->placa,
            'codigo' => $request->codigo,
        ]);
        return redirect('/tiket');
    }

    public function contacto()
    {
        return view('estacionamento.contacto');
    }

    public function pdf()
    {
        $dados=Reservas::all();
        return view('estacionamento.pdf', compact('dados'));
    }

    public function excluir($id)
    {
        //
        $dados = Reservas::find($id);
        $dados->delete();
        return redirect('/tiket')->with('excluir',' Reserva Excluída!');

    }    
}
