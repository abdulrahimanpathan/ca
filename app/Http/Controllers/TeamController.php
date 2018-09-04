<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Team;
use App\Repositories\TeamRepository;

class TeamController extends Controller
{
    /**
     * App\Repositories\TeamRepository
     *
     * @var $team
     */
    protected $team;

    /**
     * class constructor
     *
     * @param TeamRepository
     *
     */
    public function __construct(TeamRepository $teamRepo)
    {
        $this->team = $teamRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = $this->team->list();
        return view('team_list', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('team_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Team $request)
    {
        $this->team->store($request);
        return redirect('teams/create')->with('success', 'Team Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team_details = $this->team->getTeam($id);
        return view('team_with_players', compact('team_details'));
    }
}
