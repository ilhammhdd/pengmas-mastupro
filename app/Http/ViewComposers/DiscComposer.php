zz<?php

namespace App\Http\ViewComposers;

use App\DiscGroup;
use Illuminate\View\View;

class DiscComposer
{
    public $discGroup;

    public function __construct()
    {
        $this->discGroup = DiscGroup::paginate(2);
    }

    public function compose(View $view)
    {
        $view->with([
            'discGroup' => $this->discGroup
        ]);
    }
}
