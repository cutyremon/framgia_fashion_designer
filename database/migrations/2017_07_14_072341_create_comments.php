<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('costume_id')->unsigned();
            $table->string('content');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('costume_id')->references('id')->on('costumes');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public
    function down()
    {
        Schema::dropIfExists('comments');
    }
}
