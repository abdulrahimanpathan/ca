<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['team_id', 'first_name', 'last_name', 'image_uri', 'jersy_no', 'country', 'no_of_matches', 'runs','highest_score', 'fifties', 'hundreds'];

    /**
     * Get the team that owns this player.
     */
    public function team()
    {
        return $this->belongsTo('App\Models\Team');
    }
}
