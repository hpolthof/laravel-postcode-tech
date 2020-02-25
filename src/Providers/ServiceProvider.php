<?php

namespace Hpolthof\LaravelPostcodeTech\Providers;

use Hpolthof\LaravelPostcodeTech\Postcode;
use Illuminate\Support\ServiceProvider As BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/postcode.php', 'postcode');

        app()->bind('postcode.tech', function() {
            return new Postcode();
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/postcode.php' => config_path('postcode.php'),
        ]);
    }
}