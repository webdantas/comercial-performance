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
        Schema::create('cao_os_fase', function (Blueprint $table) {
            $table->integer('co_fase', true);
            $table->string('descricao', 200)->nullable()->default('0');
            $table->string('descricao_ingl', 200)->default('');
            $table->integer('ordem')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_os_fase');
    }
};
