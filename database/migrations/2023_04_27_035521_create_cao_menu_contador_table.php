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
        Schema::create('cao_menu_contador', function (Blueprint $table) {
            $table->string('co_usuario', 20)->default('');
            $table->unsignedTinyInteger('co_menu')->default(0);
            $table->tinyInteger('nu_pontos')->default(0);
            $table->unsignedTinyInteger('in_processado')->default(0);

            $table->primary(['co_usuario', 'co_menu']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_menu_contador');
    }
};
