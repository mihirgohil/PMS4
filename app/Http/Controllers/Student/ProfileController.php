<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
class ProfileController extends Controller
{
    public function index(){ 
        return view('student.ShowProfile');
    }
}
