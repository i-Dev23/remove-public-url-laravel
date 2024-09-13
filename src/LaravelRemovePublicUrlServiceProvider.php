<?php

namespace Idev23\RemovePublicUrlLaravel;

use Illuminate\Support\ServiceProvider;

class RemovePublicUrlLaravelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /* stubs */
        $this->publishes([
            __DIR__ . '/stubs/htaccess.stub' => base_path('.htaccess'),
            __DIR__ . '/stubs/index.stub' => base_path('index.php')
        ], 'RemovePublicUrlLaravel');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }
}
