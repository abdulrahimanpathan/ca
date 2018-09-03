<?php
namespace App\Repositories;

use App\Models\Player;

class PlayerRepository
{
    /*
    * Store player details
    */
	public function store($data)
	{
		if($data->hasfile('filename'))
        {
            $file = $data->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }
        $player_data = $data->all();
        $player_data['image_uri'] = $name;
        $player = Player::create($player_data);
        
        return $player;
	}	
}