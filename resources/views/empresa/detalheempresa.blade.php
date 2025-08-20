@extends('layout.app')
@section('content')

<h1>Detalhes {{ $empresa->ds_empresa }}</h1>

<table>
    <thead>
        <th>Nome</th>
        <th>CNPJ</th>
        <th>Vagas Motos</th>
        <th>Vagas Carros</th>
        <th>Ações</th>
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
        <td>
            <form action="{{ route('deletarVeiculo', $veiculo) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-link text-danger p-0" onclick="return confirm('Tem certeza que deseja excluir esse carro?')" title="Excluir">
                     <i class="bi bi-trash-fill"></i>
                </button>

            </form>
        </td>
    </tbody>
</table>


@endsection