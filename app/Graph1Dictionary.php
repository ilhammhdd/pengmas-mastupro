<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graph1Dictionary extends Model
{
    protected $table = 'graph_1_dictionaries';

    protected $fillable = [
        'point_nama', 'nilai_graph', 'nilai_graph_converted'
    ];

    public function point(){
        return $this->belongsTo('App\Point','point_nama','nama');
    }
}
