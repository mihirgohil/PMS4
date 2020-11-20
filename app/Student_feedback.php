<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student_feedback extends Model
{
    protected $fillable = [
        'title','details','student_id',
    ];

}
