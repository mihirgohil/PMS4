<?php

namespace App\Http\Controllers\Student;
use App\Student;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Student\Auth\VerificationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;

use App\Student_feedback;
use App\Student_OptOut;
use App\Placement_drive;
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
       
        $student_id = Auth::guard('student')->user()->getId();
        $student = Student::find($student_id);
        $drive = Placement_drive::find($student->placement_drive_id);
        if($student->is_optout)
        {  
           return view('student.student_opt_out_home');
        }
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

    public function optoutsave(Request $request){
        $student_id = Auth::guard('student')->user()->getId();
        $request->validate([
            'title' => 'required',
            'optout' => 'required|max:255',
        ]);
        $data = array(
            'title' => $request->get('title'),
            'optout' => $request->get('optout'),
            'student_id'=> $student_id,
      );
    // dd($data);
      Student_OptOut::create($data);
      Student::where('id',$student_id)->update(['is_optout'=>1]);
      return redirect()->back()->with('status', 'Your OptOut form submit!..');
    }

    //Student give feedback
    public function giveFeedback()
    {   
        return view('student.giveFeedback');
    }

    public function feedbacksave(Request $request){
        $student_id = Auth::guard('student')->user()->getId();
        $request->validate([
            'title' => 'required',
            'details' => 'required|max:255',
        ]);
        $data = array(
            'title' => $request->get('title'),
            'details' => $request->get('details'),
            'student_id'=> $student_id,
      );
    // dd($data);
      Student_feedback::create($data);
      return redirect()->back()->with('status', 'Feedback submit!..');
    }


    // public function mailverify() {
        
    //     return view('student.checkMailVerification');
    // }
    
}