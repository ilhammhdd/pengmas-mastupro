<?php

namespace App\Http\ViewComposers;


use App\Test;
use Illuminate\View\View;

class TestComposer
{
    protected $tests;

    public function __construct()
    {
        $this->tests = Test::all();
    }

    public function compose(View $view)
    {
        $view->with([
            'tests' => $this->tests
        ]);
    }
}