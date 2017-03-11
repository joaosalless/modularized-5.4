<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('username')->nullable()->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->dateTime('password_updated_at')->nullable();
            $table->rememberToken();
            $table->uuid('profile_id')->nullable();
            $table->string('profile_type')->nullable();
            $table->string('role')->nullable();
            $table->string('status')->nullable()->default('active');
            $table->boolean('email_verified')->default(false);
            $table->dateTime('email_verified_at')->nullable();
            $table->boolean('banned')->default(false);
            $table->dateTime('banned_at')->nullable();
            $table->dateTime('last_login')->nullable();
            $table->datetime('last_activity')->nullable();
            $table->boolean('active')->default(true);
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
        Schema::dropIfExists('master_users');
    }
}
