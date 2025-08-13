<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\VeiculoController;

Route::get('/', function () {
    return view('welcome');
});

//Visualizar empresas
//Route::get('/empresa/cadempresa', [EmpresaController::class, 'cadEmpresa']->name('formCadEmpresa'));
//Cadastrar empresas
Route::get('/empresa/cadempresa', [EmpresaController::class, 'formCadastroEmpresa'])->name('formCadEmpresa');
Route::post('/empresa/cadempresa', [EmpresaController::class, 'cadEmpresa'])->name('cadastroEmpresa');

Route::get('/empresa/listaempresa', [EmpresaController::class, 'visualizarCadastro'])->name('listaEmpresas');

Route::get('/veiculo/cadveiculo/{id}', [VeiculoController::class, 'formCadastroVeiculo'])->name('formCadVeiculo');
Route::post('/veiculo/cadveiculo/{id}', [VeiculoController::class, 'cadVeiculo'])->name('cadastroVeiculo');