<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');


            $table->timestamps();
        });


        DB::table('categories')->insert([
            ['name'=>'clothes','description'=>'no description'],
            ['name'=>'car','description'=>'no description'],
            ['name'=>'electronics','description'=>'no description'],
            ['name'=>'furniture','description'=>'no description'],
            ['name'=>'cook tool','description'=>'no description'],
            ['name'=>'chose','description'=>'no description'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
