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
        Schema::create('cao_boleto', function (Blueprint $table) {
            $table->integer('co_boleto', true);
            $table->integer('co_cliente')->default(0);
            $table->integer('co_sistema')->default(0);
            $table->integer('co_os')->default(0);
            $table->string('valor', 128)->default('');
            $table->string('vencimento', 128)->default('');
            $table->integer('status')->default(0);
            $table->string('boleto')->nullable();
            $table->string('linha_dig')->nullable();
            $table->string('parcela', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_boleto');
    }
};
