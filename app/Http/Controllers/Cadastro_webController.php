<?php

namespace App\Http\Controllers;

use App\Models\Cadastro_web;
use Illuminate\Http\Request;

class Cadastro_webController extends Controller
{
    public function create()
    {
        return view('cadastro');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        Cadastro_web::create([
            'nome' => $request->name,
            'idade' => $request->idade,
            'função' => $request->função,
        ]);

        return "Pessoa cadastrada com sucesso!";
    }

}
