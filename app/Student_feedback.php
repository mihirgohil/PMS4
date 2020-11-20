<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student_feedback extends Model
{
    protected $fillable = [
        'title','details','student_id',
    ];

    public function student()
    {
        return $this->belongsTo('App\Student');
    }
}

