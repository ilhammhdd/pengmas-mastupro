<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthCare extends Model
{
    protected $table = 'health_cares';

    protected $fillable = [
        'nama', 'alamat', 'email', 'no_telp', 'deskripsi', 'health_care_type_id'
    ];

    public function healthCareType()
    {
        return $this->belongsTo('App\HealthCare', 'health_care_type_id', 'id');
    }

    public function healthCareAccount()
    {
        return $this->hasOne('App\HealthCareAccount', 'health_care_id', 'id');
    }
}
