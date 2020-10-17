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