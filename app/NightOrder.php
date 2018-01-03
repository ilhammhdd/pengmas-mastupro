<?php
/**
 * Created by PhpStorm.
 * User: milha
 * Date: 12/27/2017
 * Time: 9:08 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class NightOrder extends Model
{
    protected $table = 'night_orders';

    protected $fillable = [
        'id', 'basket_id'
    ];

    public function basket()
    {
        return $this->belongsTo('App\Basket', 'basket_id', 'id');
    }
}