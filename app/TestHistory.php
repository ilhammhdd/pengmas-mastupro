<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestHistory extends Model
{
    protected $table = 'test_histories';

    protected $fillable = [
        'id',
        'user_id',
        'test_id'
    ];

    public function test()
    {
        return $this->belongsTo('App\Test', 'test_id', 'id');
    }

    public function stepDetailScore()
    {
        return $this->hasMany('App\StepDetailScore', 'test_history_id', 'id');
    }

    public function stepTotalScore()
    {
        return $this->hasOne('App\StepTotalScore', 'test_history_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
