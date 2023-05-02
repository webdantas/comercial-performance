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
        Schema::create('cao_atividade', function (Blueprint $table) {
            $table->integer('co_atividade', true);
            $table->string('ds_atividade', 30)->default('');
            $table->bigInteger('co_tipo_usuario')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_atividade');
    }
};
