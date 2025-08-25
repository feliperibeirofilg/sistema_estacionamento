<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Empresa;
use App\Models\Veiculo;

class VeiculoController extends Controller
{
    public function formCadadastroVeiculo(Empresa $empresa){
        return view('veiculo.cadveiculo', ['empresa' => $empresa]);
    }

    public function cadVeiculo(Request $request, Empresa $empresa){
        $request->validate ([
            'ds_veiculo' => 'required|string|max:50',
            'modelo_veiculo' => 'required|string',
            'tipo_veiculo' => ['required', Rule::in(['carro', 'moto'])],
        ]);

        $empresa->veiculo()->create([
            'ds_veiculo' => $request->ds_veiculo,
            'modelo_veiculo' => $request->modelo_veiculo,
            'tipo_veiculo' => $request->tipo_veiculo
        ]);

        
        return redirect()->route('showEmpresa', ['empresa' => $empresa])
        ->with('success', 'Veículo adicionado com sucesso!');
    }

    public function destroy(Veiculo $veiculo){

        // dd($veiculo);
        $empresaId = $veiculo->empresa_id;
        $veiculo->delete();
        return redirect()->route('showEmpresa', $empresaId)->with('success', 'Veículo excluído com sucesso!');
    }
}
