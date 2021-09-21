<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Logging\DummyRequestLogger;
use App\Services\Logging\RequestLoggerInterface;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(RequestLoggerInterface::class, DummyRequestLogger::class);
        return $this->app->make(DummyRequestLogger::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
