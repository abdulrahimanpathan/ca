<?php
namespace App\Repositories;

use App\Models\Result;

class PointsRepository
{
	/*
	* list all the fixtures
	*/
	public function getPoints()
	{
		$points = Result::select(\DB::raw('teams.*, SUM(results.points) as points'))
				        ->leftJoin('teams', 'results.winner_id', '=', 'teams.id')
				        ->groupBy('teams.id')
				        ->orderByDesc('points')
				        ->orderBy('teams.name')
				        ->get();
		return $points;
	}
}