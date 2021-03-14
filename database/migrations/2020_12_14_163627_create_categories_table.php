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
            $table->string('name_ar');
            $table->text('description');


            $table->timestamps();
        });


        DB::table('categories')->insert([
            ['name'=>'Electronics','name_ar'=>'إلكترونيات','description'=>'no description'],
            ['name'=>'Clothing, Shoes & Jewelry','name_ar'=>'ملابس واحذية ومجوهرات','description'=>'no description'],
            ['name'=>'Baby','name_ar'=>'اطفال','description'=>'no description'],
            ['name'=>'Computer','name_ar'=>'الخاسب الالى','description'=>'no description'],
            ['name'=>'Clocks','name_ar'=>'ساعات','description'=>'no description'],


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
