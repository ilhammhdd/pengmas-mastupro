<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'gurus';

    protected $fillable = [
        'id', 'nik', 'nama', 'nama_file'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function guruAccount()
    {
        return $this->hasOne('App\GuruAccount', 'guru_id', 'id');
    }
}
