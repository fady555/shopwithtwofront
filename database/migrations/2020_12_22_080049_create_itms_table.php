<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('user_id_add');
            $table->json('user_id_buy')->default(json_encode([]));
            $table->integer('number_of_itm');
            $table->integer('number_of_buy');
            $table->tinyInteger('stars');
            $table->tinyInteger('ratify')->default(0);




            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('itms');
    }
}
