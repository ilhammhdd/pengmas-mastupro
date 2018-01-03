<?php
/**
 * Created by PhpStorm.
 * User: milha
 * Date: 12/27/2017
 * Time: 8:48 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    protected $fillable = [
        'id', 'user_id', 'profile_id', 'on_duty'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function profile()
    {
        return $this->belongsTo('App\profile', 'profile_id', 'id');
    }
}