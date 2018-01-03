<?php
/**
 * Created by PhpStorm.
 * User: milha
 * Date: 12/27/2017
 * Time: 8:47 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'id', 'name'
    ];

    public function user()
    {
        return $this->hasOne('App\User', 'role_id', 'id');
    }
}