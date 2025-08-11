<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
         Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('ds_empresa');
            $table->Integer('CNPJ');
            $table->Integer('qtde_motos');
            $table->Integer('qtde_carros');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
