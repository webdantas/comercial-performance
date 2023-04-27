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
        Schema::create('cao_bonus', function (Blueprint $table) {
            $table->integer('bon_categoria')->default(0);
            $table->integer('bon_inicio')->default(0);
            $table->integer('bon_fim')->default(0);
            $table->float('bon_valor_sem', 10, 0)->nullable();
            $table->float('bon_valor_fimsem', 10, 0)->nullable();

            $table->primary(['bon_categoria', 'bon_inicio', 'bon_fim']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_bonus');
    }
};
