<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentAppliedForInternship extends Model
{
    protected $fillable = [
        'student_id','internship_id','is_selected',
    ];
}
