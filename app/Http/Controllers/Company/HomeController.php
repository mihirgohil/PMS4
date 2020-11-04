<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/company/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('company.auth:company');
    }

    /**
     * Show the Company dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('company.home');
    }

    //Company Profile
    public function profile(){
        return view('company.profile');
    }

    //Company add post
    public function addPost(){
        return view('company.postInternship');
    }

    //Company working internship
    public function workingInternship(){
        return view('company.workingInternship');
    }

    //Company history
    public function history(){
        return view('company.history');
    }

    //Company give feedback
    public function giveFeedback(){
        return view('company.giveFeedback');
    }
}