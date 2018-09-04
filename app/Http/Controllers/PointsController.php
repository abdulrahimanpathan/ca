<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PointsRepository;

class PointsController extends Controller
{
    /**
     * App\Repositories\PointsRepository
     *
     * @var $points
     */
    protected $points;

    /**
     * class constructor
     *
     * @param PointsRepository
     *
     */
    public function __construct(PointsRepository $pointsRepo)
    {
        $this->points = $pointsRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $points = $this->points->getPoints();
        return view('points_table', compact('points'));
    }
}
