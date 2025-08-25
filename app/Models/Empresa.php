<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'ds_empresa',
        'CNPJ',
        'qtde_motos',
        'qtde_carros'
    ];

    public function veiculos(){
        return $this->hasMany(Veiculo::class);
    }

    public function veiculosMoto(){
        return $this->hasMany(Veiculo::class)->where('tipo_veiculo', 'moto');
    }

    public function veiculosCarro(){
        return $this->hasMany(Veiculo::class)->where('tipo_veiculo', 'carro');
    }

    public function vagasCarrosRestantes(){

        return $this->qtde_carros - $this->veiculosCarro->count();
    }

    public function vagasMotosRestantes(){
        return $this->qtde_motos - $this->veiculosMoto->count();
    }

    
}
