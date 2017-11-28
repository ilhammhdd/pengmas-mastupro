<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthCareType extends Model
{
    public $timestamps = false;

    protected $table = 'health_care_types';

    protected $fillable = [
        'nama'
    ];

    public function healthCare()
    {
        return $this->hasMany('App\HealthCare', 'health_care_type_id', 'id');
    }
}
