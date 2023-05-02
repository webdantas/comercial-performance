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
        Schema::create('cao_movimento_justificativa', function (Blueprint $table) {
            $table->bigIncrements('co_movimento_justificativa')->index('co_movimento_justificativa');
            $table->unsignedBigInteger('co_movimento')->default(0);
            $table->unsignedBigInteger('nu_os')->default(0);
            $table->longText('ds_justificativa');

            $table->primary(['co_movimento_justificativa']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_movimento_justificativa');
    }
};
