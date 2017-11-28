<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;

    protected $table = 'roles';

    protected $fillable = [
        'nama'
    ];

    public function user()
    {
        return $this->belongsToMany('App\User', 'role_users', 'role_id', 'user_id');
    }
}
