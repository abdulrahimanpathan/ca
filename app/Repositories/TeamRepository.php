<?php
namespace App\Repositories;

use App\Models\Team;

class TeamRepository
{
	/*
	* list all the teams
	*/
	public function list()
	{
		return Team::all();
	}
	/*
	* store team details
	*/
	public function store($data)
	{
		if($data->hasfile('filename'))
        {
            $file = $data->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }
        $team_data = $data->all();
        $team_data['logo_uri'] = $name;
        $team = Team::create($team_data);
        
        return $team;
	}
	/*
	* get team details by $id
	*/
	public function getTeam($id)
	{
		$team = Team::find($id);
		return $team;
	}
}