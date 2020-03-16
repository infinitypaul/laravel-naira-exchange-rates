<?php

namespace Infinitypaul\LaravelNairaExchangeRates\Facade;

use Illuminate\Support\Facades\Facade;

class NairaExchangeRates extends Facade
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
