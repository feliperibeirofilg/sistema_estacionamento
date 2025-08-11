@extends('layout.app')
@section('content')

    <h2>Lista de Empresas</h2>

    <table>
        <thead>
            <th>Nome Empresa</th>
            <th>CNPJ</th>
            <th>Qtde Motos</th>
            <th>Qtde Carros</th>
            <th>Ações</th>
        </thead>

        <tbody>
            @foreach(empresas as empresa)
                <td>{{empresa->ds_empresa}}</td>
                <td>{{empresa->CNPJ}}</td>
                <td>{{empresa->qtde_motos}}</td>
                <td>{{empresa->qtde_carros}}</td>
                <td>Ações</td>
            @endforeach
        </tbody>
    </table>

@endsection