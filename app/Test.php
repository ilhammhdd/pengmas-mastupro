<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'tests';

    protected $fillable = [
        'id',
        'nama',
        'status',
        'enrollment_key'
    ];

    public function testHistory()
    {
        return $this->hasMany('App\TestHistory', 'test_id', 'id');
    }
}
