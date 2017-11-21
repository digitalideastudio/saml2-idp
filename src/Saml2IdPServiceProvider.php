<?php

namespace Digitalideastudio\Saml2IdP;

use Illuminate\Support\ServiceProvider;

class Saml2IdPServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Routes|Events|etc.

        // Routes
        include __DIR__ . '/routes.php';

        // Configurations
        $this->publishes([
            __DIR__.'/config/saml2-idp.php' => config_path('saml2-idp.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/saml2-idp.php', 'saml2-idp'
        );
    }
}
