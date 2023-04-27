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
        Schema::create('cao_os_email', function (Blueprint $table) {
            $table->integer('co_email', true);
            $table->integer('co_os')->nullable()->default(0);
            $table->string('email', 200)->nullable()->default('0');
            $table->string('senha', 20)->nullable()->default('0');
            $table->string('nome')->default('');
            $table->integer('co_cliente')->default(0);
            $table->integer('ativo')->default(0);
            $table->string('ddd', 20)->nullable();
            $table->string('tel', 40)->nullable();
            $table->string('cargo', 80)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_os_email');
    }
};
