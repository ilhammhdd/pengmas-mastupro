<?php
/**
 * Created by PhpStorm.
 * User: milha
 * Date: 12/27/2017
 * Time: 8:55 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'id', 'file_id', 'name', 'description'
    ];

    public function file()
    {
        return $this->belongsTo('App\File', 'file_id', 'id');
    }

    public function good()
    {
        return $this->hasMany('App\Good', 'category_id', 'id');
    }
}