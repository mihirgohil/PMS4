<?php

namespace App\Http\Controllers\PlacementCoordinator;
use App\PlacementCoordinator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Notification;
use App\Notifications\CoordinatorRegistrationNotification;
use Illuminate\Support\Facades\Mail;
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

    //placement dirve
    public function addPlacementDrive()
    {
        return view('placement-coordinator.placementDrive');
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