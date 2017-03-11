<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityLogTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('activity_log', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('log_name')->nullable();
            $table->string('description');
            $table->uuid('subject_id')->nullable()->index();;
            $table->string('subject_type')->nullable()->index();;
            $table->uuid('causer_id')->nullable()->index();;
            $table->string('causer_type')->nullable()->index();;
            $table->text('properties')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('activity_log');
    }
}
