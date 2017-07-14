<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollows extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('follows', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('following_id')->unsigned();
            $table->integer('follower_id')->unsigned();

            $table->foreign('following_id')->references('id')->on('users');
            $table->foreign('follower_id')->references('id')->on('users');
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
        schema::dropIfExists('follows');
        //
    }
}
