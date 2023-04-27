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
        Schema::create('cao_obs_sistema', function (Blueprint $table) {
            $table->increments('co_obs');
            $table->text('descricao')->nullable();
            $table->bigInteger('co_sistema')->nullable();
            $table->string('co_usuario', 20)->nullable();
            $table->dateTime('dt_obs')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_obs_sistema');
    }
};
