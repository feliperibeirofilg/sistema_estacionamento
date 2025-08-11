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

    public function veiculo(){
        return $this->hasMany(Veiculo::class);
    }
}
