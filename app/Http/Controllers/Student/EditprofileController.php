<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\Student\UpdateProfileRequest;

use Image;

use Auth;
class EditprofileController extends Controller
{
     public function edit(){

        return view('student.editprofile');
     }

    public function update(UpdateProfileRequest $request){
        
        $user = Auth::guard('student')->user();

        $user->update([
            'enrollment_no' => $request->enrollment_no,
            'studentname' => $request->studentname,
            'dob' => $request->dob,
            'email' => $request->email,
            'phone' => $request->phone,
            'ssc'=> $request->ssc,
            'hsc' => $request->hsc,
            'ug' => $request->ug,
            'stream' => $request->stream,
            'cpi' => $request->cpi
        ]);
        session()->flash('success', 'Student profile updated successfully.');

        return redirect()->back();
    }
}
