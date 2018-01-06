<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestResult extends Model
{
    protected $table = 'test_results';

    protected $fillable = [
        'id', 'test_history_id', 'current_style', 'pressure_style', 'self_style'
    ];

    public function testHistory()
    {
        return $this->belongsTo('App\TestHistory', 'test_history_id', 'id');
    }
}
