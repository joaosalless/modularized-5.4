<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactFormMessageTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_form_message', function(Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('contact_id')->nullable();
            $table->foreign('contact_id')->references('id')->on('contact_form');
            $table->string('contact_name');
            $table->string('contact_email');
            $table->string('contact_phone')->nullable();
            $table->string('sender_name');
            $table->string('sender_email');
            $table->string('sender_phone')->nullable();
            $table->text('subject')->nullable();
            $table->text('message')->nullable();
            $table->dateTime('received_at');
            $table->boolean('important')->default(0);
            $table->boolean('junk')->default(0);
            $table->boolean('read')->default(0);
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
        Schema::dropIfExists('contact_form_message');
    }

}
