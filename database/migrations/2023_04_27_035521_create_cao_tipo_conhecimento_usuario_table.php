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
        Schema::create('cao_tipo_conhecimento_usuario', function (Blueprint $table) {
            $table->increments('co_conhecimento')->index('co_conhecimento');
            $table->string('ds_conhecimento', 20)->nullable();
            $table->unsignedInteger('co_sistema')->default(0);

            $table->primary(['co_conhecimento']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_tipo_conhecimento_usuario');
    }
};
