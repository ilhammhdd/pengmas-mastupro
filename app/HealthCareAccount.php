<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthCareAccount extends Model
{
    public $timestamps = false;

    protected $table = 'health_care_accounts';

    protected $fillable = [
        'health_care_id', 'user_id'
    ];

    public function healthCare()
    {
        return $this->belongsTo('App\HealthCare', 'health_care_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
