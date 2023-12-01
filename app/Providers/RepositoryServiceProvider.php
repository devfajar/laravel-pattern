<?php

namespace App\Providers;

use App\Repositories\Eloquent\OrderEloquent;
use App\Repositories\Interfaces\OrderRepositoryInterface;
use App\Repositories\Interfaces\TaskRepositoryInterface;
use App\Repositories\Eloquent\TaskEloquent;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(OrderRepositoryInterface::class, OrderEloquent::class);
        $this->app->bind(TaskRepositoryInterface::class, TaskEloquent::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
