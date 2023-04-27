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
        Schema::create('tipo_usuario', function (Blueprint $table) {
            $table->unsignedBigInteger('co_tipo_usuario')->default(0);
            $table->string('ds_tipo_usuario', 32)->default('');
            $table->unsignedBigInteger('co_sistema')->default(0);

            $table->index(['co_tipo_usuario', 'co_sistema'], 'co_tipo_usuario');
            $table->primary(['co_tipo_usuario', 'co_sistema']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_usuario');
    }
};
