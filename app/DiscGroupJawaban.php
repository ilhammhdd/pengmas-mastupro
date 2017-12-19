<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiscGroupJawaban extends Model
{
    protected $table = 'disc_group_jawabans';

    protected $fillable = [
        'user_id', 'disc_group_nomor', 'jawaban_plus', 'jawaban_minus'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function discGroup()
    {
        return $this->belongsTo('App\DiscGroup', 'disc_group_nomor', 'nomor');
    }
}