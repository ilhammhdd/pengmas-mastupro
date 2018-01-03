<?php
/**
 * Created by PhpStorm.
 * User: milha
 * Date: 12/25/2017
 * Time: 7:26 PM
 */

namespace App;

use Illuminate\Support\Facades\Crypt;

class APITokenGenerator
{
    public static function generate($keySpace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
    {
        $str = '';
        $max = mb_strlen($keySpace, '8bit') - 1;
        for ($i = 0; $i < 6; ++$i) {
            $str .= $keySpace[random_int(0, $max)];
        }

        $apiToken = Crypt::encrypt($str);

        return $apiToken;
    }
}