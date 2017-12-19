<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StepDetailScore extends Model
{
    protected $table = 'step_detail_scores';

    protected $fillable = [
        'step_total_score_id', 'point_nama', 'test_history_id', 'nilai'
    ];

    public function stepTotalScore()
    {
        return $this->belongsTo('App\StepTotalScore', 'step_total_score_id', 'id');
    }

    public function point()
    {
        return $this->belongsTo('App\Point', 'nama_point', 'nama');
    }

    public function testHistory()
    {
        return $this->belongsTo('App\TestHistory', 'test_history_id', 'id');
    }
}