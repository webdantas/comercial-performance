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
        Schema::create('cao_fatura_pag', function (Blueprint $table) {
            $table->integer('id_fatura_pag', true);
            $table->integer('co_fatura')->default(0)->unique('co_fatura');
            $table->date('dt_efetuado')->default('2022-11-11');
            $table->float('valor_pago', 10, 0)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_fatura_pag');
    }
};
