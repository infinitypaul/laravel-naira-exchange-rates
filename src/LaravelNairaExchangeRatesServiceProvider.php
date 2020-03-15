<?php

namespace Infinitypaul\LaravelNairaExchangeRates;

use Illuminate\Support\ServiceProvider;
use Infinitypaul\NairaExchangeRates\NairaExchangeRates as NExchangeRate;

class LaravelNairaExchangeRatesServiceProvider extends ServiceProvider
{
    /*
    * Indicates if loading of the provider is deferred.
    *
    * @var bool
    */
    //protected $defer = true;

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/nairaExchangeRate.php' => config_path('naira-exchange-rates.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/nairaExchangeRate.php', 'naira-exchange-rates');

        $this->app->bind('laravel-naira-exchange-rates', function () {
            return new NExchangeRate(config('naira-exchange-rates.accessToken'));
        });
    }

    /**
     * Get the services provided by the provider.
     * @return array
     */
//    public function provides()
//    {
//        return ['laravel-naira-exchange-rates'];
//    }
}
