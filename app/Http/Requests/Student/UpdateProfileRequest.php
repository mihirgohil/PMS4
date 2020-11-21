<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Http\Requests\Student;
use Image;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function rules()
    {
        return [
            'enrollment_no' => 'required',
            'studentname' => 'required',
            'dob' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'ssc' => 'required',
            'hsc' => 'required',
            'ug' => 'required',
            'stream' => 'required',
            'cpi' => 'required',
        ];
    }
}

