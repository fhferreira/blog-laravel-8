<?php

namespace App\Providers;

use App\Services\Post\Contracts\CreateInterface;
use App\Services\Post\Contracts\ImportInterface;
use App\Services\Post\CreateService;
use App\Services\Post\ImportService;
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
        $this->app->bind(ImportInterface::class, ImportService::class);
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
