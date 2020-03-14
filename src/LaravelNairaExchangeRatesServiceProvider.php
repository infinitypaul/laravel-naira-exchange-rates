<?php

namespace Infinitypaul\LaravelNairaExchangeRates;

use Illuminate\Support\ServiceProvider;
use Infinitypaul\NairaExchangeRates\NairaExchangeRates;

class LaravelNairaExchangeRatesServiceProvider extends ServiceProvider
{
    /*
    * Indicates if loading of the provider is deferred.
    *
    * @var bool
    */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravel-naira-exchange-rates');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-naira-exchange-rates');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

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
            return new NairaExchangeRates(config('naira-exchange-rates.accessToken'));
        });
    }

    /**
     * Get the services provided by the provider.
     * @return array
     */
    public function provides()
    {
        return ['laravel-naira-exchange-rates'];
    }
}
