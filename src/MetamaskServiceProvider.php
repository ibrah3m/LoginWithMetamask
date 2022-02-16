<?php

namespace ibrah3m\loginwithmetamsk;

use Illuminate\Support\ServiceProvider;

class MetamaskServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->make('Ibrah3m\LoginWithMetamsk\MetamaskControrller');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->publishes([
            __DIR__.'/image' => public_path('ibrah3m/loginwithmetamsk'),
        ], 'public');
    
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/views', 'loginwithmetamsk');
    }
}
