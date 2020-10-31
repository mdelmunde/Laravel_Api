<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadastro;

class CadastroController extends Controller
{
    
    public function index()
    {
        return Cadastro::all();
    }

    
    public function create(){}

    public function store(Request $request)
    {
        return Cadastro::create($request->all()); 
    }

    public function show($id)
    {
        return Cadastro::findOrFail($id);
    }

    public function edit($id){}
    
    public function update(Request $request, $id)
    {
        $Cadastro = Cadastro::findOrFail($id);
        return $Cadastro->update($request->all());
    }

    public function destroy($id)
    {
        $Cadastro = Cadastro::findOrFail($id);
        return $Cadastro->delete();
    }
}
