<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Team;

class Match extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['team1', 'team2', 'match_on'];

    /**
     * Get the result associated with the match.
     */
    public function result()
    {
        return $this->hasOne('App\Models\Result');
    }
    /**
     * Get the team1 name.
     *
     * @param  string  $value
     * @return string
     */
    public function getTeam1NameAttribute()
    {
	$team = Team::find($this->team1_id);
	return $team->name;
    }
    /**
     * Get the team2 name.
     *
     * @param  string  $value
     * @return string
     */
    public function getTeam2NameAttribute()
    {
        $team =Team::find($this->team2_id);
        return $team->name;
    }
}
