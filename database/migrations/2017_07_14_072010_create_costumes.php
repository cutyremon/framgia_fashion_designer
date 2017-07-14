<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostumes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('costumes', function(Blueprint $table) {
        $table->increments('id');
        $table->integer('user_id')->unsigned();
        $table->integer('style_id')->unsigned();
        $table->string('average_point');
        $table->string('description');
            $table->timestamps();

        $table->foreign('user_id')->references('id')->on('users');
        $table->foreign('style_id')->references('id')->on('styles');
        //
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {Schema::dropIfExists('costumes');
        //
    }
}
