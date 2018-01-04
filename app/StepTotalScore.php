<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StepTotalScore extends Model
{
    protected $table = 'step_total_scores';

    protected $fillable = [
        'nomor', 'test_history_id', 'total'
    ];

    public function stepDetailScore()
    {
        return $this->hasMany('App\StepDetailScore', 'step_total_score_id', 'id');
    }

    public function testHistory()
    {
        return $this->belongsTo('App\TestHistory', 'test_history_id', 'id');
    }
}
