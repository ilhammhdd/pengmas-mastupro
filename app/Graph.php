<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graph extends Model
{
    protected $table = 'graphs';

    protected $fillable = [
        'nomor'
    ];

    public function graphDictionary()
    {
        return $this->hasMany('App\GraphDictionary', 'graph_nomor', 'nomor');
    }
}