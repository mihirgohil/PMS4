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

    // public function mailverify() {
        
    //     return view('student.checkMailVerification');
    // }
    
}