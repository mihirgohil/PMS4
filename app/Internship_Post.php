<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internship_Post extends Model
{
    protected $fillable = [
        'co_details','overview','duration','recruitment','position','modeofinterview','workinghours','ctc','bond','company_id','stipend','is_posted','is_completed',
    ];

}
