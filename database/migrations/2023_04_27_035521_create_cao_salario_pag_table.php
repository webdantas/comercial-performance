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
        Schema::create('cao_salario_pag', function (Blueprint $table) {
            $table->integer('id_pagamento', true)->index('id_pagamento');
            $table->string('co_usuario', 20)->default('');
            $table->date('dt_efetuado')->nullable();
            $table->enum('status', ['Autorizado', 'Pago', 'Pendente'])->default('Pendente');
            $table->text('observacao')->nullable();

            $table->unique(['co_usuario', 'dt_efetuado'], 'unico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_salario_pag');
    }
};
