@extends('layout.app')
@section('content')


<div>
    <form action="#" method="post">

    <label for="ds_veiculo">
        <input type="text" name="ds_veiculo" placeholder="Modelo do carro" required>
    </label>
    <label for="modelo_veiculo">
        <input type="text" name="modelo_veiculo" placeholder="Modelo do carro" required>
    </label>
    <label for="tipo_veiculo">
        <select name="tipo_veiculo" >
            <option value="moto">Moto</option>
            <option value="carro">Carro</option>
        </select>
    </label>

    

    <button type="submit">Salvar</button>

    </form>
</div>


@endsection