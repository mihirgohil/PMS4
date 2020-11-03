<?php

namespace App\Http\Controllers\Student\Auth;

use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
            'enrollment_no' => 'required|min:12|numeric',
            // 'rollno' => 'required|max:255|numeric',
            'studentname' => 'required|max:255',
            'dob' => 'required|date',
            'email' => 'required|email|max:255|unique:students',
            'password' => 'required|min:6|confirmed',
            'phone' => 'required|min:10|numeric',
            'ssc' => 'required|numeric',
            'hsc' => 'required|numeric',
            'ug' => 'required|numeric',
            'stream' => 'required|max:255',
            'cpi' => 'required|numeric',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\Student
     */
    protected function create(array $data)
    {   
        return Student::create([
            'enrollment_no' => $data['enrollment_no'],
            // 'rollno' => $data['rollno'],
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
        ]);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('student.auth.register');
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
