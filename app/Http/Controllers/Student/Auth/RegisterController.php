<?php

namespace App\Http\Controllers\Student\Auth;

use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Image;

use App\Placement_drive;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new admins as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/student';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {   
        $this->middleware('student.guest:student');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    { //  dd($data);
        return Validator::make($data, [
            'enrollment_no' => 'required|min:12|numeric|unique:students',
            'studentname' => 'required|max:255',
            'dob' => 'required|date',
            'email' => 'required|email|max:255|unique:students',
            'password' => 'required|min:6|confirmed',
            'avatar' => 'required|image|mimes:jpg,jpeg,png,svg,bmp|max:5000',
            'phone' => 'required|min:10|numeric',
            'ssc' => 'required|numeric',
            'hsc' => 'required|numeric',
            'ug' => 'required|numeric',
            'stream' => 'required|max:255',
            'cpi' => 'required|numeric',
            'drive' => 'required',
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\Student
     */
    protected function create(array $data)
    {  // dd($data);        
        if(request()->has('avatar')){
            $avataruploaded = request()->file('avatar');
            $avatarname = time().'.'.$avataruploaded->getClientOriginalExtension();
            $avatarpath = public_path('/images/');
            $avataruploaded->move($avatarpath, $avatarname);
            return Student::create([
                'enrollment_no' => $data['enrollment_no'],
                'studentname' => $data['studentname'],
                'dob' => $data['dob'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'avatar' => '/images/' . $avatarname,
                'phone' => $data['phone'],
                'ssc' => $data['ssc'],
                'hsc' => $data['hsc'],
                'ug' => $data['ug'],
                'stream' => $data['stream'],
                'cpi' => $data['cpi'],
                'placement_drive_id'=> $data['drive'],
            ]);
        }
        return Student::create([
            'enrollment_no' => $data['enrollment_no'],
            'studentname' => $data['studentname'],
            'dob' => $data['dob'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'phone' => $data['phone'],
            'ssc' => $data['ssc'],
            'hsc' => $data['hsc'],
            'ug' => $data['ug'],
            'stream' => $data['stream'],
            'cpi' => $data['cpi'],
            'placement_drive_id'=> $data['drive']
        ]);
    }
        
        

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {   $drives = Placement_drive::where('is_completed', 0)->get(); 
        return view('student.auth.register')->with(['drive'=>$drives]);
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('student');
    }

}
