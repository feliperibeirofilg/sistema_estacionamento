<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $fillable = [
        'ds_veiculo',
        'modelo_veiculo',
        'tipo_veiculo'
    ];

    public function empresa(){
        return $this->hasMany(Empresa::class);
    }

    
}
