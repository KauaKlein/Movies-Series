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
        Schema::create('tb_episode', function (Blueprint $table) {

            $table->integer('id_episode')->primary();
            $table->integer('id_season');
            $table->index('id_season');
            $table->string('episode');
            $table->string('name');
            $table->string('description');
            $table->string('title_episode');

            $table->timestamps();

            $table->foreign('id_season')->references('id_season')->on('tb_season'); // Define uma chave estrangeira na coluna 'id_season' da tabela atual.
            // Essa chave estrangeira faz referência à coluna 'id' na tabela 'tb_season'.
            // Isso significa que 'id_season' na tabela atual deve corresponder a um valor existente na coluna 'id' da tabela 'tb_season'.

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_episode');
    }
};
