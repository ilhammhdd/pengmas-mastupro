<?php
/**
 * Created by PhpStorm.
 * User: milha
 * Date: 12/27/2017
 * Time: 9:07 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $table = 'checkouts';

    protected $fillable = [
        'id', 'basket_id', 'status'
    ];

    public function basket()
    {
        return $this->belongsTo('App\Basket','basket_id','id');
    }
}