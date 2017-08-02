<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpdateTableP1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->string('avatar', 255)->nullable();
            $table->string('phone', 100)->nullable();
            $table->integer('role')->default(0)->change();
            $table->string('description', 255)->nullable();
            $table->string('name_display', 255)->nullable();
        });
        Schema::table('styles', function(Blueprint $table) {
            $table->string('image', 255)->nullable();
            $table->string('tittle', 255)->change();
            $table->renameColumn('descritpion', 'description');
        });
        Schema::table('produces', function(Blueprint $table) {
            $table->string('image', 255)->nullable();
        });
        Schema::table('topics', function(Blueprint $table) {
            $table->string('image', 255)->nullable();
            $table->string('description', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
