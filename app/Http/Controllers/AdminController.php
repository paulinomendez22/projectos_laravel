<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function grafic(){
        return view('estacionamento.adm.painel');
    }

    public function admin(){
        return view('estacionamento.adm.cadastro');
    }
}
