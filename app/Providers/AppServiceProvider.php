<?php

namespace App\Providers;

use App\Services\Post\Contracts\CreateInterface;
use App\Services\Post\CreateService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CreateInterface::class, CreateService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('title_page', "Big Post Journal");
    }
}
