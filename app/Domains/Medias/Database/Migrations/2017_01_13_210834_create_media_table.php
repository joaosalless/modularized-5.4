<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('model_id')->nullable();
            $table->string('model_type')->nullable();
            $table->string('collection_name');
            $table->string('name');
            $table->string('file_name');
            $table->string('disk');
            $table->unsignedInteger('size');
            $table->string('mime_type');
            $table->text('manipulations');
            $table->text('custom_properties');
            $table->unsignedInteger('order_column')->nullable();
            $table->boolean('is_cover')->default(0);
            $table->boolean('in_carousel')->default(0);
            $table->string('extension')->nullable();
            $table->uuid('category_id')->nullable();
            $table->string('category_slug')->nullable();;
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('dominant_color')->nullable();;
            $table->boolean('active')->default(1);
            $table->nullableTimestamps();
            $table->softDeletes();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('media');
    }
}
