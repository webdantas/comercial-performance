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
        Schema::create('cao_formacao_usuario', function (Blueprint $table) {
            $table->string('co_usuario', 20)->default('');
            $table->string('tp_curso', 13)->default('');
            $table->string('ds_curso', 50)->nullable();
            $table->string('ds_instituicao', 50)->nullable();
            $table->date('dt_conclusao')->nullable();

            $table->primary(['co_usuario', 'tp_curso']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_formacao_usuario');
    }
};
