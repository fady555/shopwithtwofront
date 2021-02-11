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
            $table->id();
            $table->string('f_name');
            $table->string('l_name');
            $table->string('email')->unique();
            $table->tinyInteger('email_verified')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('mobil')->nullable();
            $table->tinyInteger('mobil_verified')->nullable();
            $table->timestamp('mobil_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('role_id')->default('3');
            $table->string('forget_pass')->nullable();
            $table->integer('city_id')->default(0);
            $table->string('img')->default('img_user/member-lucia.jpg');
            $table->rememberToken();
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
