<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';

    protected $fillable = [
        'nama', 'alamat', 'email', 'no_telp', 'jenis_kelamin', 'golongan_darah'
    ];

    public function patientAccount()
    {
        return $this->hasOne('App\PatientAccount', 'patient_id', 'id');
    }
}
