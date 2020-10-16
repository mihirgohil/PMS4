<?php

namespace App\Http\Controllers\PlacementCoordinator;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/placement-coordinator/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('placement-coordinator.auth:placement-coordinator');
    }

    /**
     * Show the PlacementCoordinator dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('placement-coordinator.home');
    }

}