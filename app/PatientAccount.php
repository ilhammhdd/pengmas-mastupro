<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientAccount extends Model
{
    public $timestamps = false;

    protected $table = 'patient_accounts';

    protected $fillable = [
        'patient_id', 'user_id'
    ];

    public function patient()
    {
        return $this->belongsTo('App\Patient', 'patient_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
