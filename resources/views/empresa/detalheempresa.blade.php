@extends('layout.app')
@section('content')

<h1>Detalhes {{ $empresa->ds_empresa }}</h1>

<table>
    <thead>
        <th>Nome</th>
        <th>CNPJ</th>
        <th>Vagas Motos</th>
        <th>Vagas Carros</th>
    </thead>

    <tbody>
        <td>{{ $empresa->ds_empresa }}</td>
        <td>{{ $empresa->CNPJ }}</td>
        <td>{{ $empresa->veiculosMoto()->count() }} / {{ $empresa->qtde_motos }}
            ( Restam: {{ $empresa->vagasMotosRestantes() }} )
        </td>
        <td>{{ $empresa->veiculosCarro()->count() }} / {{$empresa->qtde_motos}}
            ( Restam: {{ $empresa->vagasCarrosRestantes() }} )
        </td>
    </tbody>
</table>


@endsection