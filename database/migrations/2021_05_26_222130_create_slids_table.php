<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slids', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('h2')->nullable();
            $table->string('span')->nullable();
            $table->string('p')->nullable();
            $table->string('a_link_shop')->nullable();
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
        Schema::dropIfExists('slids');
    }
}
