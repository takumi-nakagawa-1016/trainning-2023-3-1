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
            \App\Repositories\Contact\ContactRepositoryInterface::class,
            \App\Repositories\Contact\ContactRepository::class,
        );

        $this->app->bind(
            \App\Services\Contact\ContactServiceInterface::class,
            \App\Services\Contact\ContactService::class,
        );

        $this->app->bind(
            \App\Repositories\Department\DepartmentRepositoryInterface::class,
            \App\Repositories\Department\DepartmentRepository::class
        );
        $this->app->bind(
            \App\Services\Department\DepartmentServiceInterface::class,
            \App\Services\Department\DepartmentService::class
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
