<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('battle_id')->unsigned();
            $table->string('chore_type')->default('timed');
            $table->string('title')->default('Untitled');
            $table->timestamps();
        });

        Schema::table('chores', function (Blueprint $table) {
            $table->foreign('battle_id')->references('id')->on('battles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('chores');
    }
}
