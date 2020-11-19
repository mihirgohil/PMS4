<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Student\Auth\VerificationController;


class HomeController extends Controller
{

    protected $redirectTo = '/student/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() 
    {   
        $this->middleware('student.auth:student');        
        $this->middleware('student.verified:student');
        
    }

    /**
     * Show the Student dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
        return view('student.home');
    }

    //Student Profile
    public function stuprofile()
    {
        return view('student.stuprofile');
    }

    public function showprofile()
    {
        return view('student.showprofile');
    }

    //Student streams
    public function streams()
    {
        return view('student.streams');
    }

    //internship
    public function interndetails()
    {
        return view('student.interndetails');
    }

    //Student apply for internship
    public function appliedInternship()
    {
        return view('student.appliedInternship');
    }

    //Student Opt-Out
    public function optout()
    {
        return view('student.optout');
    }

    //Student give feedback
    public function giveFeedback()
    {
        return view('student.giveFeedback');
    }


    // public function mailverify() {
        
    //     return view('student.checkMailVerification');
    // }
    
}