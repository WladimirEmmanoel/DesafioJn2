<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class cliente extends Controller
{
    public function create()
    {
        return view('cliente');
    }
    
    public function store(Request $request)
    {
        $Cliente = new Cliente;

        if($request->nome == null || $request->telefone == null || $request->cpf == null || $request->placa_do_carro == null){

            return ('/');
        }
        DB::insert('insert into clientes (nome, telefone, cpf, placa_do_carro) values (?, ?, ?, ?)', [$request->nome, $request->telefone, $request->cpf, $request->placa_do_carro]);
        return redirect('/');
    }
}
