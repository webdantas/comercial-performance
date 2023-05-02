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
        Schema::create('cao_help_motivo_chamado', function (Blueprint $table) {
            $table->integer('co_motivo', true)->unique('co_motivo');
            $table->string('ds_motivo', 70)->default('0');

            $table->index(['co_motivo'], 'co_motivo_2');
            $table->primary(['co_motivo']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_help_motivo_chamado');
    }
};
