<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStyles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('styles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tittle');
            $table->string('descritpion');
            $table->timestamps();


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
        Schema::dropIfExists('styles');
        //
    }
}
