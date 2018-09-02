i<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'logo_uri', club_state];
	
    /**
     * Get the players for the team.
     */
    public function players()
    {
        return $this->hasMany('App\Models\Player');
    }
}
