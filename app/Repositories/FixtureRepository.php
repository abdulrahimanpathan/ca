<?php
namespace App\Repositories;

use App\Models\Match;

class FixtureRepository
{
	/*
	* list all the fixtures
	*/
	public function list()
	{
		return Match::all();
	}
}