<?php

namespace App\Http\Controllers;

use App\Models\Moto;

use Illuminate\Http\Request;

class MotosController extends Controller
{
   
    public function index()
    {
        $motos = Moto::all();

        return view('motos.index', compact('motos'));
    }

    
    public function create()
    {
        return view( 'motos.create' );
    }

    
    
    public function store(Request $requisicao)
    {

        $motos = new Moto();

      
        $motos->nome = $requisicao->nome;
        $motos->marca = $requisicao->marca;
        $motos->caracteristicas = $requisicao->caracteristicas;
        $motos->ano = $requisicao->ano;

        
        $motos->save();

        
        return redirect()->route('motos.show', $motos->id);
    
    }
    public function show(Moto $moto)
    {
        return view('motos.view', compact('moto'));
    }

    public function edit(Moto $moto)
    {
        return view('motos.edit', compact('moto'));
    }


    public function update(Request $requisicao, Moto $moto)
    {
        $moto->update($requisicao->all());

        return redirect()->route('motos.show', $moto->id);
    }

   
    public function destroy(Moto $moto)
    {
        $moto->delete();

        return redirect()->route('motos.index');
    }
}
