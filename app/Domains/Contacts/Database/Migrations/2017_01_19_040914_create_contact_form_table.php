<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_form', function(Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('cep')->nullable();
            $table->string('logradouro')->nullable();
            $table->string('numero')->nullable();
            $table->string('complemento')->nullable();
            $table->string('observacao')->nullable();
            $table->string('bairro')->nullable();
            $table->string('municipio')->nullable();
            $table->string('uf')->nullable();
            $table->string('ibge')->nullable(); // cod_municipio_completo IBGE
            $table->boolean('accept_html')->default(1);
            $table->boolean('auto_reply')->default(0);
            $table->boolean('save_messages')->default(0);
            $table->boolean('require_captcha')->default(0);
            $table->text('reply_message_site')->nullable();
            $table->text('reply_message_email')->nullable();
            $table->text('intro')->nullable();
            $table->text('body')->nullable();
            $table->string('layout')->nullable();
            $table->boolean('active')->default(1);
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
        Schema::dropIfExists('contact_form');
    }

}
