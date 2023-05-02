<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cao_help_tela_chamado', function (Blueprint $table) {
            $table->integer('co_tela', true);
            $table->integer('co_cliente')->default(0);
            $table->integer('co_sistema')->default(0);
            $table->string('ds_tela', 200)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_help_tela_chamado');
    }
};
