<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('team_id');
	    $table->foreign('team_id')->references('id')->on('teams');
	    $table->string('first_name');
	    $table->string('last_name');
	    $table->string('image_uri');
	    $table->integer('jersy_no');
	    $table->string('country');
	    $table->integer('no_of_matches');
	    $table->integer('runs');
	    $table->integer('highest_score');
	    $table->integer('fifties');
	    $table->integer('hundreds');
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
        Schema::dropIfExists('players');
    }
}
