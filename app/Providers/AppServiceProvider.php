<?php

namespace App\Providers;
use App\Contracts\ModifyInformation;
use App\Contracts\RegistrationAndAuthentication;
use App\Services\UserInfoModification;
use App\Services\UserRegistrationAndAuthentication;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ModifyInformation::class, UserInfoModification::class);
        $this->app->bind(RegistrationAndAuthentication::class, UserRegistrationAndAuthentication::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
