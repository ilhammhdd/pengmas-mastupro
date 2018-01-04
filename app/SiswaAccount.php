<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiswaAccount extends Model
{
    protected $table = 'siswa_accounts';

    protected $fillable = [
        'siswa_id','user_id'
    ];

    public function siswa(){
        return $this->belongsTo('App\Siswa', 'siswa_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
