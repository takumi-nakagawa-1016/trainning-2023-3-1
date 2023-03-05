<?php

namespace App\Providers;

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
        $this->app->bind(
            \App\Interface\RepositoryInterface\Contact\ContactRepositoryInterface::class,
            \App\Repositories\Contact\ContactEQRepository::class,
        );

        $this->app->bind(
            \App\Interface\ServiceInterface\Contact\ContactServiceInterface::class,
            \App\Services\Contact\ContactService::class,
        );
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
