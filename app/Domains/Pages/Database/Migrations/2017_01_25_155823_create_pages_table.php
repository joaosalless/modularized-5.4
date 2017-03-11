<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pages', function(Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('category_id');
            $table->foreign('category_id')->references('id')->on('pages_categories');
            $table->string('title');
            $table->string('template')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->text('intro')->nullable();
            $table->text('body')->nullable();
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
		Schema::dropIfExists('pages');
	}

}
