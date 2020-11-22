<?php

namespace App\Http\Controllers\Student;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Student\Auth\VerificationController;

use App\Student;
use App\Student_OptOut;
use App\Placement_drive;

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
    public function optoutIndex() {
       
        $student_id = Auth::guard('student')->user()->getId();
        $student = Student::find($student_id);
        $optout = Student_OptOut::where('student_id',$student_id)->firstOrFail();
        // dd($optout->optout);
        return view('student.homeOptOut')->with(['student'=>$student,'optout'=>$optout]);
    }
}
