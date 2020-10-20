<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Student\Auth\VerificationController;
class MailVerificationController extends Controller
{
    public function __construct() 
    {   
        $this->middleware('student.auth:student');        
        // $this->middleware('student.verified:student');
        
    }
    public function mailverify() {
        
        return view('student.checkMailVerification');
    }

}
