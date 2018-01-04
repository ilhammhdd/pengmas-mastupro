<?php

namespace App\Http\ViewComposers;


use App\TestHistory;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class TestHistoryComposer
{

    protected $testHistory;

    public function __construct()
    {
        $this->testHistory = TestHistory::where('user_id', Auth::id())->get();
    }

    public function compose(View $view)
    {
        $view->with([
            'testHistory' => $this->testHistory
        ]);
    }
}