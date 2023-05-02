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
        Schema::create('cao_diary_report', function (Blueprint $table) {
            $table->integer('co_diary_report', true);
            $table->time('hr_gasta')->nullable()->default('00:00:00');
            $table->integer('co_atividade')->default(0);
            $table->longText('ds_assunto');
            $table->bigInteger('co_movimento')->default(0);
            $table->unsignedBigInteger('nu_os')->nullable();
            $table->unsignedBigInteger('co_sistema')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_diary_report');
    }
};
