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
        Schema::create('cao_custo', function (Blueprint $table) {
            $table->bigIncrements('co_custo');
            $table->tinyInteger('co_tipo_custo')->default(0);
            $table->string('descricao', 100)->default('0');
            $table->tinyInteger('co_escritorio')->default(0);
            $table->date('dt_compra')->nullable();
            $table->date('dt_pagamento')->nullable();
            $table->text('co_boleto')->nullable();
            $table->float('valor', 10, 0)->default(0);
            $table->string('parcela', 5)->nullable();
            $table->boolean('pag')->nullable();
            $table->unsignedBigInteger('co_custo_high')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_custo');
    }
};
