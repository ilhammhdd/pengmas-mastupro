<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';

    protected $fillable = [
        'id','nis', 'nama', 'nama_file', 'kelas_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function kelas()
    {
        return $this->belongsTo('App\Kelas');
    }

    public function siswaAccount()
    {
        return $this->hasOne('App\SiswaAccount', 'siswa_id', 'id');
    }
}
