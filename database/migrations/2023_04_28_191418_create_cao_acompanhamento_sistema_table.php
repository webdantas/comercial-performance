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
        Schema::create('cao_acompanhamento_sistema', function (Blueprint $table) {
            $table->increments('co_acompanhamento');
            $table->string('email', 40)->nullable();
            $table->string('senha', 20)->nullable();
            $table->bigInteger('co_sistema')->nullable()->default(0);
            $table->char('status', 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_acompanhamento_sistema');
    }
};
