<?php

namespace App\Providers;

use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Monolog\Logger;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserLogger::class, function ($app) {
            return new UserLogger(
                $app->make(Mailer::class),
                $app->make(Logger::class),
                $app->make(Slack::class)
            );
        });
    }
}
