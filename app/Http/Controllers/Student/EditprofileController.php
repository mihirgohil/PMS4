<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\Student\UpdateProfileRequest;
use Auth;

class EditprofileController extends Controller
{
     public function edit(){ 
          return view('student.editprofile');
     }

    public function update(UpdateProfileRequest $request){
        
        $user = Auth::guard('student')->user();

        $user->update([
            'studentname' => $request->studentname,
            'phone'       => $request->phone,
            'stream'      => $request->stream
        ]);

        session()->flash('success', 'Student profile updated successfully.');

        return redirect()->back();
    }
}
