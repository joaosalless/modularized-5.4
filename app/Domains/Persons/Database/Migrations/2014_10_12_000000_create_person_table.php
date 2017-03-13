<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nome');
            $table->string('apelido')->nullable();
            $table->string('cpf')->nullable()->index();
            $table->uuid('user_id')->nullable()->index();
            $table->string('user_type')->nullable()->index();
            $table->date('data_nascimento')->nullable()->index();
            $table->string('sexo')->nullable()->index();
            $table->string('telefone')->nullable()->index();
            $table->string('celular')->nullable()->index();
            $table->string('cep')->nullable()->index();
            $table->string('logradouro')->nullable();
            $table->string('numero')->nullable();
            $table->string('complemento')->nullable();
            $table->string('bairro')->nullable();
            $table->string('municipio')->nullable();
            $table->string('uf')->nullable();
            $table->string('ibge')->nullable(); // cod_municipio_completo IBGE
            $table->string('site')->nullable();
            $table->text('social')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persons');
    }
}
