@extends('layout.app')
@section('content')

    <h2>Lista de Empresas</h2>

    <table>
        <thead>
            <th>Nome Empresa</th>
            <th>CNPJ</th>
            <th>Vagas Motos</th>
            <th>Vagas Carros</th>
            <th>Ações</th>
        </thead>

        <tbody>
            @foreach($empresas as $empresa)
            <tr>
                <td>{{ $empresa->ds_empresa}}</td>
                <td>{{ $empresa->CNPJ}}</td>
                <td>{{ $empresa->veiculosMoto()->count() }} / {{ $empresa->qtde_motos }}
                    ( Restam: {{ $empresa->vagasMotosRestantes() }} )
                </td>
                <td>{{ $empresa->veiculosCarro()->count() }} / {{$empresa->qtde_motos}}
                    ( Restam: {{ $empresa->vagasCarrosRestantes() }} )
                </td>
                <td>
                    <a href="{{ route('formCadVeiculo', ['empresa' => $empresa]) }}">Cadastrar Veículo</a>
                    <a href="{{ route('showEmpresa', ['empresa' => $empresa]) }}">Detalhe Empresa</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection