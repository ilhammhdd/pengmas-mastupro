<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            [
                'pages.siswa.home',
                'layouts.siswa.sidebar',
                'pages.siswa.edit_profile'
            ], 'App\Http\ViewComposers\SiswaHomeComposer'
        );
        View::composer(
            [
                'pages.guru.home',
                'layouts.guru.sidebar',
                'pages.guru.edit_profile'
            ], 'App\Http\ViewComposers\GuruHomeComposer'
        );
        View::composer('pages.admin.register_new_user', 'App\Http\ViewComposers\RegisterNewUserComposer');
        View::composer('pages.disc', 'App\Http\ViewComposers\DiscComposer');
        View::composer('pages.test_all', 'App\Http\ViewComposers\TestComposer');
        View::composer('pages.test_history', 'App\Http\ViewComposers\TestHistoryComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
