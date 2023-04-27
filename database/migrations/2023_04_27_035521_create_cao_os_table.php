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
        Schema::create('cao_os', function (Blueprint $table) {
            $table->integer('co_os', true);
            $table->integer('nu_os')->nullable();
            $table->integer('co_sistema')->nullable()->default(0);
            $table->string('co_usuario', 50)->nullable()->default('0');
            $table->integer('co_arquitetura')->nullable()->default(0);
            $table->string('ds_os', 200)->nullable()->default('0');
            $table->string('ds_caracteristica', 200)->nullable()->default('0');
            $table->string('ds_requisito', 200)->nullable();
            $table->date('dt_inicio')->nullable();
            $table->date('dt_fim')->nullable();
            $table->integer('co_status')->nullable()->default(0);
            $table->string('diretoria_sol', 50)->nullable()->default('0');
            $table->date('dt_sol')->nullable();
            $table->string('nu_tel_sol', 20)->nullable()->default('0');
            $table->string('ddd_tel_sol', 5)->nullable();
            $table->string('nu_tel_sol2', 20)->nullable();
            $table->string('ddd_tel_sol2', 5)->nullable();
            $table->string('usuario_sol', 50)->nullable()->default('0');
            $table->date('dt_imp')->nullable();
            $table->date('dt_garantia')->nullable();
            $table->integer('co_email')->nullable();
            $table->integer('co_os_prospect_rel')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_os');
    }
};
