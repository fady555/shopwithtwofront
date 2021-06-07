<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\DB;

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
            $table->string('password');
            $table->tinyInteger('role_id')->default('3');
            $table->string('forget_pass')->nullable();
            $table->integer('city_id')->default(0);
            $table->string('img')->default('img_user/member-lucia.jpg');
            $table->rememberToken();
            $table->timestamps();
        });


        DB::table('users')->insert([
            [
                'f_name'=>'fady',
                'l_name'=>'fared',
                'email'=>'jhrt19@yahoo.com',
                'email_verified'=>'1',
                #'email_verified_at'=>'20-3-2020',
                'mobil'=>'01287917557',
                'mobil_verified' => 0,
                #'mobil_verified_at' => ,
                'password'=>'$2y$10$UURwVh87MMMfCrm1bsfIT.FKIqPTYISQcedbiPHhLbnqFTcMDeKHe',
                'role_id'=>'1',
                #'forget_pass'=>,
                #'city_id',
                'img' =>'img_user/member-lucia.jpg',
            ],
        ]);





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
