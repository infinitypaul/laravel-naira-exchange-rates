<?php

namespace Infinitypaul\LaravelNairaExchangeRates\Tests;

use Orchestra\Testbench\TestCase;
use Infinitypaul\LaravelNairaExchangeRates\LaravelNairaExchangeRatesServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelNairaExchangeRatesServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
