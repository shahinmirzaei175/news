<?php

namespace App\Providers;

use App\Repositories\Base\CrudRepository;
use App\Repositories\Interfaces\CrudRepositoryInterface;
use App\Repositories\Interfaces\NewsRepositoryInterface;
use App\Repositories\NewsRepository;
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
        //Base crud
        $this->app->bind(CrudRepositoryInterface::class,CrudRepository::class);

        //Entities Repo
        $this->app->bind(NewsRepositoryInterface::class,NewsRepository::class);
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
