<?php

namespace App\Http\Controllers\PlacementCoordinator;
use App\PlacementCoordinator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\PlacementCoordinator\UpdatePcProfileRequest;
use Auth;

use Notification;
use App\Notifications\CoordinatorRegistrationNotification;
use Illuminate\Support\Facades\Mail;

use App\Placement_drive;
use App\Company;
use App\InternshipPc_Post;

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

    // Placement Coordinator Profile
    public function pcprofile()
    {
        return view('placement-coordinator.pcprofile');
    }

    public function editpcprofile(){ 
        return view('placement-coordinator.editpcprofile');
   }

  public function update(UpdatePcProfileRequest $request){
      
      $user = Auth::guard('placement-coordinator')->user();

      $user->update([
          'name' => $request->name,
      ]);

      session()->flash('success', 'Profile updated successfully.');

      return redirect()->back();
  }



    // internship
    public function pcinternship()
    {    $drives = Placement_drive::where('is_completed',0)->get();
         $company = Company::all();
        return view('placement-coordinator.pcinternship')->with(['drive'=>$drives,'company'=>$company]);
    }
    
    public function internshipSave(Request $request){
       
        $request->validate([
            'co_details' => 'required',
            'overview'=> 'required',
            'duration'=> 'required',
            'recruitment'=> 'required',
            'position'=> 'required',
            'modeofinterview'=> 'required',
            'workinghours'=> 'required',
            'ctc'=> 'required',
            'bond'=> 'required',
            'stipend'=> 'required',
            'company'=>'required',
            'drive' => 'required',
        ]);
        $data = array(
            'co_details' => $request->get('co_details'),
            'overview' => $request->get('overview'),
            'duration' => $request->get('duration'),
            'recruitment' => $request->get('recruitment'),
            'position'=>$request->get('position'),
            'modeofinterview'=> $request->get('modeofinterview'),
            'workinghours'=> $request->get('workinghours'),
            'ctc'=> $request->get('ctc'),
            'bond'=> $request->get('bond'),
            'stipend'=> $request->get('stipend'),
            'is_posted'=> false,
            'is_completed'=> false,
            'company_id'=> $company,
            'placement_drive_id'=> $drive,
      );
    dd($data);
      InternshipPc_Post::create($data);
      return redirect()->back()->with('status', 'Internship Post Created! Thank you.');
    }


    public function manageinternship()
    {
        return view('placement-coordinator.managePublish');
    }

    //placement dirve
    public function addPlacementDrive()
    {   $drives = Placement_drive::all();
        return view('placement-coordinator.placementDrive')->with(['drive'=>$drives]);
    }

    public function addNewDrive()
    {   
        return view('placement-coordinator.addNewDrive');
    }

    public function addNewDriveSave(Request $request)
    {
        $request->validate([
            'drive_name' => 'required|max:255']);
        $data = array(
            'drive_name' => $request->get('drive_name'),
            'is_completed'=>0,
        ); 

            $drive = new Placement_drive($data);
            $drive->save();
        return redirect()->back()->with('status', 'New Placement Drive Created successfully.');
    }

    public function closePlacementDrive(Request $request)
    {
        // dd($request->drid);
       $drive = Placement_drive::find($request->drid);
       $drive->is_completed = 1;
       $drive->save();
       return redirect()->back();
    }

    //Company
    public function addCompany()
    {
        return view('placement-coordinator.addCompany');
    }
    
    public function manageCompany()
    {
        return view('placement-coordinator.manageCompany');
    }

    public function companyFeedback()
    {
        return view('placement-coordinator.companyFeedback');
    }

    //Student
    public function addStudent()
    {
        return view('placement-coordinator.addStudent');
    }
    
    public function manageStudent()
    {
        return view('placement-coordinator.manageStudent');
    }

    public function studentFeedback()
    {
        return view('placement-coordinator.studentFeedback');
    }

    //add new coordinator
    public function addNewCoordinatorShow()
    {
        return view('placement-coordinator.addNewCoordinator');
    }
    //store new coordinator
    public function addNewCoordinatorStore(Request $request)
    {
        $request->validate(['name' => 'required|max:255',
        'email' => 'required|email|max:255|unique:placement_coordinators',
        'password' => 'required|min:6|confirmed']);
        $data = array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
        );

        PlacementCoordinator::create($data);
        $this->sendNewCoMessage($request);
        return redirect()->back()->with('status', 'New Coordinator Acccount Created successfully.');
        
    }
    //sending new registration mail
    public function sendNewCoMessage(Request $request)
    {   //dd($request->input('email'));
        Notification::route('mail', $request->input('email'))->notify(new CoordinatorRegistrationNotification($request->input('password')));
    } 
}