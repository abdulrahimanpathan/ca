<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\FixtureRepository;

class FixtureController extends Controller
{
    /**
     * App\Repositories\FixtureRepository
     *
     * @var $fixture
     */
    protected $fixture;

    /**
     * class constructor
     *
     * @param FixtureRepository
     *
     */
    public function __construct(FixtureRepository $fixtureRepo)
    {
        $this->fixture = $fixtureRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fixtures = $this->fixture->list();
        return view('fixtures', compact('fixtures'));
    }
}
