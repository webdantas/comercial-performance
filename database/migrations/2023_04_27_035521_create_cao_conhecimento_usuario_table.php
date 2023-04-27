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
        Schema::create('cao_conhecimento_usuario', function (Blueprint $table) {
            $table->string('co_usuario', 20)->default('');
            $table->unsignedInteger('co_conhecimento')->default(0);
            $table->unsignedInteger('nv_conhecimento')->nullable();
            $table->unsignedTinyInteger('is_certificado')->nullable();

            $table->primary(['co_usuario', 'co_conhecimento']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_conhecimento_usuario');
    }
};
