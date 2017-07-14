<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostumeStyle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('costume_style', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('costume_id')->unsigned();
            $table->integer('style_id')->unsigned();
            $table->timestamps();


            $table->foreign('costume_id')->references('id')->on('costumes');
            $table->foreign('style_id')->references('id')->on('styles');


        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('costume_style');
        //
    }
}
