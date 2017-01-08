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
       $this->registerPersonalInfoRepo();
    }

     public function registerPersonalInfoRepo()
    {
        return $this->app->bind(
            'App\\Repositories\\PersonalInfo\\PersonalInfoRepository',
            'App\\Repositories\\PersonalInfo\\EloquentPersonalInfo'
            );
    }
}
