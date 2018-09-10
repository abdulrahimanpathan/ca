<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['match_id', 'winner_id'];

    /**
     * Get the match that relates to this result.
     */
    public function match()
    {
        return $this->belongsTo('App\Models\Match');
    }
    /**
     * Get the winner of the match
     */
    public function winner()
    {
        return $this->belongsTo('App\Models\Team');
    }
}
