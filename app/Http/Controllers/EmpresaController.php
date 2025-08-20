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

        return redirect()->route('listaEmpresas');
    }

    public function visualizarCadastro(){
        $empresas = Empresa::all();

        return view('empresa.listaempresa', compact ('empresas'));
    }

    public function detalheEmpresa(Empresa $empresa){
        return view ('empresa.detalheempresa', ['empresa' => $empresa]);
    }

    public function destroy(Veiculo $veiculo)
{
    // 1. Antes de apagar, pegamos o ID da empresa para sabermos para onde redirecionar.
    $empresaId = $veiculo->empresa_id;

    // 2. O Laravel já encontrou o veículo correto através da rota.
    // Agora, simplesmente chamamos o método delete() nele.
    $veiculo->delete();

    // 3. Redirecionamos de volta para a página de detalhes da empresa,
    // passando o ID que guardamos e uma mensagem de sucesso.
    return redirect()->route('showEmpresa', $empresaId)
                     ->with('success', 'Veículo excluído com sucesso!');
}
}
