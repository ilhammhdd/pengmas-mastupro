<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsToMany('App\Role', 'role_users', 'user_id', 'role_id');
    }

    public function patientAccount()
    {
        return $this->hasOne('App\PatientAccount', 'user_id', 'id');
    }

    public function healthCareAccount()
    {
        return $this->hasOne('App\HealthCareAccount', 'user_id', 'id');
    }
}
