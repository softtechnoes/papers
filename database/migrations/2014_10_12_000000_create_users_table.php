<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // $table->id();
            // $table->string('name');
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password'); 
            // $table->rememberToken();
            // $table->foreignId('current_team_id')->nullable();
            // $table->text('profile_photo_path')->nullable();
            // $table->timestamps();


            $table->uuid('id')->unique(); 
            $table->string('name');
            $table->string('username')->nullable();
            $table->string('email')->unique();
            $table->string('activation_code')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('status')->default(0);
            $table->string('img_src')->default('storage/users/img/user.jpg');
            $table->rememberToken();
            $table->string('phone_no')->nullable();
            $table->text('bio')->nullable();
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
        Schema::dropIfExists('users');
    }
}
