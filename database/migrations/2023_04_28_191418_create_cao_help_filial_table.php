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
        Schema::create('cao_help_filial', function (Blueprint $table) {
            $table->increments('co_filial')->index('filialId');
            $table->string('no_filial', 70)->default('');
            $table->integer('co_cliente')->default(0);
            $table->char('estado', 2)->default('');

            $table->primary(['co_filial']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_help_filial');
    }
};
