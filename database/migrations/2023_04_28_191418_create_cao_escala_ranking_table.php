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
        Schema::create('cao_escala_ranking', function (Blueprint $table) {
            $table->tinyInteger('idescala', true);
            $table->tinyInteger('qtd_visual')->default(0);
            $table->integer('pontuacao')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_escala_ranking');
    }
};
