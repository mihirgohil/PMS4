<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company_feedback extends Model
{
    protected $fillable = [
        'title','details','company_id',
    ];

    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
