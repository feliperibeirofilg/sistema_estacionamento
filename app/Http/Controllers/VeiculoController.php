<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    public function formCadadastroVeiculo(){
        return view('veiculo.cadveiculo');
    }

    public function cadVeiculo(Request $request){
        $request->validate ([
            'ds_veiculo' => 'required|string|max:50',
            'modelo_veiculo' => 'required|string',
            'tipo_veiculo' = > 'required|enum'
        ]);

        Veiculo::create([
            'ds_veiculo' => $request->ds_veiculo,
            'modelo_veiculo' => $request->modelo_veiculo,
            'tipo_veiculo' => $request->tipo_veiculo
        ]);
        return redirect()->route('cadastroVeiculo');
        
    }
}
