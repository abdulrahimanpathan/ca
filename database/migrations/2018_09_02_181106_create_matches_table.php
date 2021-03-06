<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('team1_id');
            $table->foreign('team1_id')->references('id')->on('teams');
            $table->unsignedInteger('team2_id');
            $table->foreign('team2_id')->references('id')->on('teams');
	    $table->dateTime('match_at');
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
        Schema::dropIfExists('matches');
    }
}
