<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\DB;

class CreateItmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->json('status')->default(json_encode([]));
            $table->json('made_material')->nullable();
            $table->double('price');
            $table->double('discount');
            $table->json('color')->default(json_encode([]));
            $table->json('img')->default(json_encode([]));
            $table->json('unit')->default(json_encode([]));
            $table->json('size')->default(json_encode([]));
            $table->integer('user_id_add')->nullable();
            $table->json('user_id_buy')->default(json_encode([]));
            $table->integer('number_of_itm');
            $table->integer('number_of_buy');
            $table->tinyInteger('stars');
            $table->tinyInteger('ratify')->default(0);




            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });

        DB::table('itms')->insert([
            [
                'name'=>'mouse',
                'description'=>'the itm is very ..........',
                'status'=>json_encode([1,2,3]),
                'made_material'=>json_encode([3]),
                'price'=>20,
                'discount'=>15,
                'color'=>json_encode(['#2426de','#c39e2a','#23e28e']),
                'img'=>json_encode(['gen/images.png','gen/images2.jpg']),//after stroge app
                'unit'=>json_encode([]),
                'size'=>json_encode([]),
                'user_id_add'=>1,
                'user_id_buy'=>json_encode([]),
                'number_of_itm'=>20,
                'number_of_buy'=>20,
                'stars'=>5,
                'ratify'=>1,
                'product_id'=>1,
            ],
            [
                'name'=>'keyboard',
                'description'=>'the itm is very ..........',
                'status'=>json_encode([1,2,3]),
                'made_material'=>json_encode([3]),
                'price'=>20,
                'discount'=>15,
                'color'=>json_encode(['#2426de','#c39e2a','#23e28e']),
                'img'=>json_encode(['gen/images.png','gen/images2.jpg']),//after stroge app
                'unit'=>json_encode([]),
                'size'=>json_encode([]),
                'user_id_add'=>1,
                'user_id_buy'=>json_encode([]),
                'number_of_itm'=>20,
                'number_of_buy'=>20,
                'stars'=>5,
                'ratify'=>1,
                'product_id'=>1,
            ],
            [
                'name'=>'blackbary',
                'description'=>'the itm is very ..........',
                'status'=>json_encode([1,2,3]),
                'made_material'=>json_encode([3]),
                'price'=>20,
                'discount'=>15,
                'color'=>json_encode(['#2426de','#c39e2a','#23e28e']),
                'img'=>json_encode(['gen/images.png','gen/images2.jpg']),//after stroge app
                'unit'=>json_encode([]),
                'size'=>json_encode([]),
                'user_id_add'=>1,
                'user_id_buy'=>json_encode([]),
                'number_of_itm'=>20,
                'number_of_buy'=>20,
                'stars'=>5,
                'ratify'=>1,
                'product_id'=>1,
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
        Schema::dropIfExists('itms');
    }
}
