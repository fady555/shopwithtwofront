<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('mater_name');
            $table->timestamps();
        });

        DB::table('materials')->insert([
            ['mater_name'=>'Iron'],
            ['mater_name'=>'Wood'],
            ['mater_name'=>'Plastic'],
            ['mater_name'=>'Paga'],
            ['mater_name'=>'paper'],
            ['mater_name'=>'glass'],
            ['mater_name'=>'Ston'],
        ]);
        //DB::unprepared(file_get_contents(url('the-end-shop/public/sql_file/world.sql')));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materials');
    }
}
