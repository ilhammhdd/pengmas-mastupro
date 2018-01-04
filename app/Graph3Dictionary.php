<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graph3Dictionary extends Model
{
    protected $table = 'graph_3_dictionaries';

    protected $fillable = [
        'point_nama', 'nilai_graph', 'nilai_graph_converted'
    ];

    public function point(){
        return $this->belongsTo('App\Point','point_nama','nama');
    }
}
