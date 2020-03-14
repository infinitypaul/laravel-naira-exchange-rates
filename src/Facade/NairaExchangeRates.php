<?php

namespace Infinitypaul\LaravelNairaExchangeRates;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Infinitypaul\LaravelNairaExchangeRates\Skeleton\SkeletonClass
 */
class NairaExchangeRates extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-naira-exchange-rates';
    }
}
