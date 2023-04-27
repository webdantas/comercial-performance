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
        Schema::create('cao_feriados', function (Blueprint $table) {
            $table->unsignedTinyInteger('dia')->nullable()->default(0);
            $table->unsignedTinyInteger('mes')->nullable()->default(0);
            $table->integer('ano')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_feriados');
    }
};
