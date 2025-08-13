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
                <td>{{ $empresa->qtde_motos}}</td>
                <td>{{ $empresa->qtde_carros}}</td>
                <td>
                    <a href="{{ route('formCadVeiculo', ['id' => $empresa->id]) }}">Cadastrar Veículo</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection