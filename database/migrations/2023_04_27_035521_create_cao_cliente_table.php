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
        Schema::create('cao_cliente', function (Blueprint $table) {
            $table->increments('co_cliente');
            $table->string('no_razao', 50)->nullable();
            $table->string('no_fantasia', 50)->nullable();
            $table->string('no_contato', 30)->nullable();
            $table->string('nu_telefone', 15)->nullable();
            $table->string('nu_ramal', 6)->nullable();
            $table->string('nu_cnpj', 18)->nullable();
            $table->string('ds_endereco', 150)->nullable();
            $table->integer('nu_numero')->nullable();
            $table->string('ds_complemento', 150)->nullable();
            $table->string('no_bairro', 50)->default('');
            $table->string('nu_cep', 10)->nullable();
            $table->string('no_pais', 50)->nullable();
            $table->bigInteger('co_ramo')->nullable();
            $table->bigInteger('co_cidade')->default(0);
            $table->unsignedInteger('co_status')->nullable();
            $table->string('ds_site', 50)->nullable();
            $table->string('ds_email', 50)->nullable();
            $table->string('ds_cargo_contato', 50)->nullable();
            $table->char('tp_cliente', 2)->nullable();
            $table->string('ds_referencia', 100)->nullable();
            $table->unsignedInteger('co_complemento_status')->nullable();
            $table->string('nu_fax', 15)->nullable();
            $table->string('ddd2', 10)->nullable();
            $table->string('telefone2', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cao_cliente');
    }
};
