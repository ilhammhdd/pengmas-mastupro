<?php
/**
 * Created by PhpStorm.
 * User: milha
 * Date: 12/19/2017
 * Time: 1:11 PM
 */

namespace App\Http\ViewComposers;


use App\User;
use Illuminate\View\View;

class GuruHomeComposer
{
    protected $guru;

    public function __construct()
    {
        $user = User::where('id', auth()->user()["id"])->first();
        $guruAccount = $user->guruAccount()->first();
        $this->guru = $guruAccount->guru()->first();
    }

    public function compose(View $view)
    {
        $view->with([
            'guru' => $this->guru
        ]);
    }
}