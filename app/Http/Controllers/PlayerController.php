<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PlayerRepository;
use App\Models\Team;

class PlayerController extends Controller
{
    /**
     * App\Repositories\PlayerRepository
     *
     * @var $player
     */
    protected $player;

    /**
     * class constructor
     *
     * @param TeamRepository
     *
     */
    public function __construct(PlayerRepository $playerRepo)
    {
        $this->player = $playerRepo;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$teams = Team::all(['id', 'name']);
        return view('player_create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->player->store($request);
        return redirect('players/create')->with('success', 'Player created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);
    }
}
