<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('unit_name');
            $table->string('unit_code');
            $table->timestamps();
        });

        DB::table('units')->insert([
            ['unit_name' => 'metre','unit_code'=>'m'],
            ['unit_name' => 'kilogram','unit_code'=>'kg'],
            ['unit_name' => 'kilometre','unit_code'=>'km'],
            ['unit_name' => 'centimetre','unit_code'=>'cm'],
            ['unit_name' => 'millimetre','unit_code'=>'mm'],
            ['unit_name' => 'micrometre','unit_code'=>'μm'],
            ['unit_name' => 'nanometre','unit_code'=>'nm'],
            ['unit_name' => 'kilolitre','unit_code'=>'kl'],
            ['unit_name' => 'centilitre','unit_code'=>'cl'],
            ['unit_name' => 'millilitre','unit_code'=>'ml'],
            ['unit_name' => 'microlitre','unit_code'=>'μl'],
            ['unit_name' => 'metric ton	','unit_code'=>'t'],
            ['unit_name' => 'gram','unit_code'=>'g'],
            ['unit_name' => 'centigram','unit_code'=>'cg'],
            ['unit_name' => 'milligram','unit_code'=>'mg'],
            ['unit_name' => 'microgram','unit_code'=>'μg'],
            ['unit_name' => '1 inch','unit_code'=>'25 millimetres'],
            ['unit_name' => '1 foot	','unit_code'=>'0.3 metre'],
            ['unit_name' => '1 yard','unit_code'=>'0.9 metre'],
            ['unit_name' => '1 mile','unit_code'=>'1.6 kilometres'],
            ['unit_name' => '1 square inch','unit_code'=>'6.5 square centimetres'],
            ['unit_name' => '1 square foot','unit_code'=>'0.09 square metre'],
            ['unit_name' => '1 square yard','unit_code'=>'0.8 square metre'],
            ['unit_name' => '1 acre','unit_code'=>'0.4 hectare*'],
            ['unit_name' => '1 acre','unit_code'=>'0.4 hectare*'],
            //https://www.britannica.com/science/International-System-of-Units

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('units');
    }
}
