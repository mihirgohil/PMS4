<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Student\Auth\VerificationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;

use App\Student;
use App\Student_feedback;
use App\Student_OptOut;
use App\Placement_drive;
use App\Internship_Post;
use App\StudentAppliedForInternship;
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
        $this->middleware('student.optout:student');
    }

    /**
     * Show the Student dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
       
        $student_id = Auth::guard('student')->user()->getId();
        $student = Student::find($student_id);
        // $drive = Placement_drive::find($student->placement_drive->id);
        $posts = Internship_Post::where('placement_drive_id',$student->placement_drive->id)->where('is_posted',1)->orderBy('id','desc')->get();
        $student_applied = StudentAppliedForInternship::select('internship_id')->where('student_id',$student_id)->get();
        $student_ap_array = array();
        foreach ($student_applied as $value) {
            array_push($student_ap_array, $value->internship_id);
          }
        
        return view('student.home')->with(['student'=>$student,'posts'=>$posts,'applied_list'=>$student_ap_array]);
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

    
    //Student apply for internship
    public function appliedInternship()
    {    $student_id = Auth::guard('student')->user()->getId();
        $student = Student::find($student_id);
        // $drive = Placement_drive::find($student->placement_drive->id);
        $posts = Internship_Post::where('placement_drive_id',$student->placement_drive->id)->where('is_posted',1)->orderBy('id','desc')->get();
        $student_applied = StudentAppliedForInternship::select('internship_id')->where('student_id',$student_id)->get();
        $student_ap_array = array();
        foreach ($student_applied as $value) {
            array_push($student_ap_array, $value->internship_id);
          }
        
        return view('student.appliedInternship')->with(['student'=>$student,'posts'=>$posts,'applied_list'=>$student_ap_array]);
    }

    public function applyForInternship(Request $request)
    {   $internship_id = $request->input('id');
        $student_id = Auth::guard('student')->user()->getId();
        StudentAppliedForInternship::create(['student_id'=>$student_id,'internship_id'=>$internship_id]);
        return redirect()->back()->with('status', 'You have Applied For Internship.');
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
      return redirect()->route('student.optOutIndex')->with('status', 'Your OptOut form submit!..');
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

    //internship
    public function interndetails()
    {
        return view('student.interndetails');
    }

    
}