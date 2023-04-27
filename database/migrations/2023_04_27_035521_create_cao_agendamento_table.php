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
        Schema::create('cao_agendamento', function (Blueprint $table) {
            $table->bigIncrements('co_agendamento');
            $table->dateTime('dt_hr_inicio')->nullable();
            $table->dateTime('dt_hr_fim')->nullable();
            $table->bigInteger('co_status_agendamento')->default(0);
            $table->bigInteger('co_diary_report_consultor')->default(0);
            $table->bigInteger('co_complemento')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_agendamento');
    }
};
