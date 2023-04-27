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
        Schema::create('cao_hist_ocorrencias_os', function (Blueprint $table) {
            $table->integer('idocorrencia', true);
            $table->integer('co_os')->nullable()->index('co_os');
            $table->string('co_usuario', 20)->nullable()->index('co_usuario');
            $table->dateTime('data')->nullable();
            $table->enum('tipo', ['Interna', 'Externa'])->default('Interna');
            $table->text('descricao');
            $table->string('responsavel', 50)->default('');
            $table->dateTime('data_fechamento')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_hist_ocorrencias_os');
    }
};
