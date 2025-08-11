@extends('layout.app')
@section('content')

    <div>
        <form action="{{ route('cadastroEmpresa') }}" method="post">
            @csrf
            <div>
                <label for="ds_empresa" name="ds_empresa">
                    <input type="text" name="ds_empresa"  placeholder="Nome da empresa:" required>
                </label>
            </div>

            <div>
                <label for="CNPJ">
                    <input type="number" name="CNPJ"  placeholder="CNPJ da empresa:" required>
                </label>
            </div>

            <div>
                <label for="qtde_motos">
                    <input type="number" name="qtde_motos"  placeholder="Quantidade de vagas de moto:" required>
                </label>
            </div>

            <div>
                <label for="qtde_carros">
                    <input type="number" name="qtde_carros"  placeholder="Quantidade de vagas de carro:" required>
                </label>
            </div>

            <div>
                <input type="submit" value="Cadastrar Empresa" >
            </div>
        </form>
    </div>

@endsection