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
        Schema::create('tb_season', function (Blueprint $table) {

            $table->integer('id_series');// Cria uma coluna e armazena em'id_serie', do tipo inteiro na tabela.
            $table->integer('id_season')->primary();
            $table->string('season_title');// Cria uma coluna e armazena em 'season_title', do tipo string na tabela
            $table->string('description');
            $table->timestamps();
            $table->softDeletes(); // Adiciona uma coluna 'deleted_at' para suportar exclusões suaves, permitindo que registros sejam "excluídos" sem serem removidos do banco de dados.
            $table->index('id_series');

            $table->foreign('id_series')->references('id_series')->on('tb_series');  // Define 'id_serie' como uma chave estrangeira que referencia a coluna 'id' na tabela 'tb_series'.


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_season');
    }
};
