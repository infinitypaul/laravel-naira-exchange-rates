<?php

namespace Infinitypaul\LaravelNairaExchangeRates;

use Illuminate\Support\Facades\Facade;

class NairaExchangeRatesFacade extends Facade
{
    /**
     * Get the registered name of the component..
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-naira-exchange-rates';
    }
}
