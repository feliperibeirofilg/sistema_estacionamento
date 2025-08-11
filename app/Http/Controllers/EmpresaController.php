<?php

namespace App\Http\Controllers;
use App\Models\Empresa;
use App\Models\Veiculo;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function formCadastroEmpresa(){
        return view('empresa.cadempresa');
    }

    public function cadEmpresa(Request $request){

        $request->validate ([
            'ds_empresa' => 'required|string|max:100',
            'CNPJ' => 'required|integer',
            'qtde_motos' => 'required|integer',
            'qtde_carros' => 'required|integer'
        ]);

        Empresa::create([
            'ds_empresa' => $request->ds_empresa,
            'CNPJ' => $request->CNPJ,
            'qtde_motos' => $request->qtde_motos,
            'qtde_carros' =>$request->qtde_carros,
        ]);

        return view('welcome');
    }

    public function visualizarCadastro(){
        Empresa::all();
    }
    
}
