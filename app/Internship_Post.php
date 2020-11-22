<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internship_Post extends Model
{
    protected $fillable = [
        'co_details','overview','duration','recruitment','position','modeofinterview','workinghours','ctc','bond','company_id','placement_drive_id','stipend','is_posted','is_completed','is_active_registration',
    ];

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function placement_drive()
    {
        return $this->belongsTo('App\Placement_drive');
    }

    
}
