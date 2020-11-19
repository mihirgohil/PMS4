<?php

namespace App\Http\Controllers\Company\Auth;

use App\Company;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Image;

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
    protected $redirectTo = '/company';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('company.guest:company');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    { 
        //dd($data);
        return Validator::make($data, [
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'website' => 'required|url',
            'email' => 'required|email|max:255|unique:companies',
            'password' => 'required|min:6|confirmed',
            'avatar' => 'required|image|mimes:jpg,jpeg,png,svg,bmp|max:5000',
            'phone' => 'required|min:10|numeric',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\Company
     */
    protected function create(array $data)
    {
        if(request()->has('avatar')){
            $avataruploaded = request()->file('avatar');
            $avatarname = time().'.'.$avataruploaded->getClientOriginalExtension();
            $avatarpath = public_path('/images/');
            $avataruploaded->move($avatarpath, $avatarname);
            return Company::create([
                'name' => $data['name'],
                'address' => $data['address'],
                'website' => $data['website'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'avatar' => '/images/' . $avatarname,
                'phone' => $data['phone'],
            ]);
        }
        return Company::create([
            'name' => $data['name'],
            'address' => $data['address'],
            'website' => $data['website'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'phone' => $data['phone'],
        ]);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('company.auth.register');
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('company');
    }

}
