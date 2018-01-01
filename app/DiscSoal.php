<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiscSoal extends Model
{
    protected $table = 'disc_soals';

    public $timestamps = false;

    protected $fillable = [
        'disc_group_nomor', 'soal', 'kunci_plus', 'kunci_minus'
    ];

    public function discGroup()
    {
        return $this->belongsTo('App\DiscGroup', 'disc_group_nomor', 'nomor');
    }
}
