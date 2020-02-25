<?php

namespace Hpolthof\LaravelPostcodeTech\Tests;

use Hpolthof\LaravelPostcodeTech\PostcodeFacade;
use Hpolthof\LaravelPostcodeTech\Providers\ServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase {
    protected function getPackageProviders($app)
    {
        return [
            ServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Postcode' => PostcodeFacade::class,
        ];
    }

}