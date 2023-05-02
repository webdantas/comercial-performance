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
        Schema::create('cao_help_autor', function (Blueprint $table) {
            $table->integer('co_autor', true)->index('co_autor');
            $table->string('no_autor', 80)->default('0');
            $table->integer('co_filial')->default(0);
            $table->string('nu_ddd1', 4)->nullable();
            $table->string('nu_tel1', 15)->nullable();
            $table->string('nu_ramal1', 6)->nullable();
            $table->string('nu_ddd2', 4)->nullable();
            $table->string('nu_tel2', 15)->nullable();
            $table->string('nu_ramal2', 6)->nullable();
            $table->string('ds_email', 50)->nullable();
            $table->string('ds_funcao', 100)->default('');

            $table->primary(['co_autor']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_help_autor');
    }
};
