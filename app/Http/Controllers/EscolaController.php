<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Escolas;

class EscolaController extends Controller
{
    public function cadastrarEscolaForm()
    {
        return view('escolas.cadastrar');
    }

    public function salvarEscola(Request $request)
    {
        $request->validate([
            'cep' => 'required',
            'nome' => 'required',
            'rua' => 'required',
            'bairro' => 'required',
        ]);

        $escola = new Escolas([
            'cep' => $request->input('cep'),
            'nome' => $request->input('nome'),
            'rua' => $request->input('rua'),
            'bairro' => $request->input('bairro'),
        ]);



        $escola->save();

        return redirect()->route('cadastrar-escola')->with('success', 'Escola cadastrada com sucesso!');


    }
    public function listarEscolas()
    {
        $escolas = Escolas::all();
        return view('roles.index', compact('escolas'));
    }
}
