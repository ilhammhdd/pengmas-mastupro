<?php

namespace App\Http\ViewComposers;

use App\HealthCare;
use App\HealthCareAccount;
use App\User;
use Illuminate\View\View;

class HealthcareMasterComposer
{
    protected $healthcare;

    function __construct()
    {
        $user = User::where('id', auth()->user()["id"])->first();
        $healthcareaccount = $user->healthCareAccount()->first();
        $this->healthcare = $healthcareaccount->healthCare()->first();

    }

    public function compose(View $view)
    {
        $view->with([
            'healthcare' => $this->healthcare
        ]);
    }
}