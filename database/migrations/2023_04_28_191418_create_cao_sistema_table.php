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
        Schema::create('cao_sistema', function (Blueprint $table) {
            $table->integer('co_sistema', true)->index('co_sistema');
            $table->unsignedInteger('co_cliente')->nullable()->default(0);
            $table->string('co_usuario', 50)->nullable()->default('0');
            $table->unsignedInteger('co_arquitetura')->nullable()->default(0);
            $table->string('no_sistema', 200)->nullable();
            $table->text('ds_sistema_resumo')->nullable();
            $table->text('ds_caracteristica')->nullable();
            $table->text('ds_requisito')->nullable();
            $table->string('no_diretoria_solic', 100)->nullable();
            $table->string('ddd_telefone_solic', 5)->nullable();
            $table->string('nu_telefone_solic', 20)->nullable();
            $table->string('no_usuario_solic', 100)->nullable();
            $table->date('dt_solicitacao')->nullable();
            $table->date('dt_entrega')->nullable();
            $table->integer('co_email')->nullable();

            $table->primary(['co_sistema']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_sistema');
    }
};
