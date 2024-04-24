<?php

namespace App\Providers;

use App\RepoInterface\RepoBase;
use App\RepoInterface\ProductRepo;
use App\RepoInterface\CategoryRepo;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(RepoBase::class, CategoryRepo::class);
        $this->app->bind(RepoBase::class, ProductRepo::class);
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
