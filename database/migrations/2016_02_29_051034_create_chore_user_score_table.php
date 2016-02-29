<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChoreUserScoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chore_user_score', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('chore_id')->unsigned();
            $table->integer('score')->default(0);
            $table->timestamps();
        });

        Schema::table('chore_user_score', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('chore_id')->references('id')->on('chores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('chore_user_score');
    }
}
