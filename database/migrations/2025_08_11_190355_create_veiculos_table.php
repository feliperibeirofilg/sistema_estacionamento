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
         Schema::create('veiculos', function (Blueprint $table) {
            $table->id();
            $table->string('ds_veiculo');
            $table->string('modelo_veiculo');
            $table->enum('tipo_veiculo',['carro', 'moto']);
            $table->foreignId('empresa_id')->constrained('empresa')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veiculos');
    }
};
