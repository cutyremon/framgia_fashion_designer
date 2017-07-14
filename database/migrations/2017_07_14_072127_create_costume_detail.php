<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostumeDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {schema::create('costume_detail',function(Blueprint $table){
       $table->increments('id');
       $table->integer('costume_id')->unsigned();
       $table->integer('produce_id')->unsigned();
        $table->timestamps();


       $table->foreign('costume_id')->references('id')->on('costumes');
        $table->foreign('produce_id')->references('id')->on('produces');

    });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {Schema::dropIfExists('costume_detail');
        //
    }
}
