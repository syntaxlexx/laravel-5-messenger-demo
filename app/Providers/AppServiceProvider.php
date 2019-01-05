<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        \View::composer(
            [
                'users.*',
                'messenger.partials.thread-participants',
                'auth.login',
            ],

            function ($view) {
                $view->with([
                    'users' => \App\User::all(),
                ]);
            }
        );
    }
}
