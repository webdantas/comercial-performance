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
        Schema::create('cao_os_prazo', function (Blueprint $table) {
            $table->integer('co_prazo', true);
            $table->integer('co_os')->nullable()->default(0);
            $table->unsignedInteger('co_fase')->nullable()->default(0);
            $table->integer('total_analista')->nullable()->default(0);
            $table->integer('total_hora')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_os_prazo');
    }
};
