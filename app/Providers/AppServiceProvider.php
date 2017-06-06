<?php

namespace Gotrecillo\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
            $this->app->register(\Backpack\Generators\GeneratorsServiceProvider::class);
            $this->app->register(\Laracasts\Generators\GeneratorsServiceProvider::class);
        }
    }
}
