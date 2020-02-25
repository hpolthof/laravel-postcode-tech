<?php

use Hpolthof\LaravelPostcodeTech\Providers\ServiceProvider;
use Hpolthof\LaravelPostcodeTech\Tests\TestCase;

class ServiceProviderTest extends TestCase
{
    public function test_it_extends_laravel()
    {
        $serviceProvider = new ServiceProvider(app());

        $this->assertInstanceOf(\Illuminate\Support\ServiceProvider::class, $serviceProvider);
    }

    public function test_it_uses_config()
    {
        $this->assertEquals(env('POSTCODE_TOKEN'), config('postcode.token'));
    }
}