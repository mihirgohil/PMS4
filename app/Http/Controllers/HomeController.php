<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  
        if(Auth::guard('placement-coordinator')->check()) {
            return redirect('placement-coordinator');
        }
        if(Auth::guard('student')->check()) {
            return redirect('student');
        }
        if(Auth::guard('company')->check()) {
            return redirect('company');
        }

        return view('homepage');
    }
}
