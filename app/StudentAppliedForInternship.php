<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentAppliedForInternship extends Model
{
    protected $fillable = [
        'student_id','internship_id','is_selected',
    ];

    public function internship()
    {
        return $this->belongsTo('App\Internship_Post');
    }
    public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
