<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentAppliedForInternship extends Model
{
    protected $fillable = [
        'student_id','internship_id','is_selected',
    ];

    public function company()
    {
        return $this->belongsTo('App\Company');
    }
    public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
