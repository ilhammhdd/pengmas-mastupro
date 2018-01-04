<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuruAccount extends Model
{
    protected $table = 'guru_accounts';

    protected $fillable = [
        'guru_id', 'user_id'
    ];

    public function guru()
    {
        return $this->belongsTo('App\Guru', 'guru_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
