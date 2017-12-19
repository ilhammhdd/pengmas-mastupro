<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $table = 'points';

    protected $fillable = [
        'nama'
    ];

    public function stepDetailScore(){
        return $this->hasMany('App\StepDetailScore', 'point_nama', 'nama');
    }

    public function graphDictionary(){
        return $this->hasMany('App\GraphDictionary', 'point_nama', 'nama');
    }
}