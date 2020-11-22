<?php

namespace App;

use App\Notifications\Student\StudentResetPassword;
use App\Notifications\Student\StudentVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'enrollment_no','studentname','dob', 'email', 'password','avatar','phone','ssc','hsc','ug','stream','cpi','placement_drive_id','is_placed','is_optout',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new StudentResetPassword($token));
    }

    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new StudentVerifyEmail);
    }

    public function getId()
    {
        return $this->id;
    }

    public function drive()
    {
        return $this->hasOne('App\Placement_drive');
    }

    public function placement_drive()
    {
        return $this->belongsTo('App\Placement_drive');
    }
    public function optout()
    {
        return $this->hasOne('App\Student_OptOut');
    }
}
