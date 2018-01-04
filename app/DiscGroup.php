<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiscGroup extends Model
{
    protected $table = 'disc_groups';

    public $timestamps = false;

    protected $fillable = [
        'nomor'
    ];

    public function discGroupJawaban()
    {
        return $this->hasMany('App\DiscGroupJawaban', 'disc_group_nomor', 'nomor');
    }

    public function discSoal()
    {
        return $this->hasMany('App\DiscSoal', 'disc_group_nomor', 'nomor');
    }
}
