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
        Schema::create('permissao_sistema', function (Blueprint $table) {
            $table->string('co_usuario', 20)->default('');
            $table->unsignedBigInteger('co_tipo_usuario')->default(0);
            $table->unsignedBigInteger('co_sistema')->default(0);
            $table->char('in_ativo', 1)->default('S');
            $table->string('co_usuario_atualizacao', 20)->nullable();
            $table->dateTime('dt_atualizacao')->nullable();

            $table->index(['co_usuario', 'co_tipo_usuario', 'co_sistema', 'dt_atualizacao'], 'co_usuario');
            $table->primary(['co_usuario', 'co_tipo_usuario', 'co_sistema']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissao_sistema');
    }
};
