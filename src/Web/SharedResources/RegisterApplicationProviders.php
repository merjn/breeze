<?php

namespace Breeze\Web\SharedResources;

use Breeze\Web\SharedResources\Config\ServiceProviderRegistryInterface;
use Illuminate\Contracts\Foundation\Application;

class RegisterApplicationProviders
{
    public function bootstrap(Application $app)
    {
        $providers = call_user_func($app->get(ServiceProviderRegistryInterface::class));
        foreach ($providers as $provider) {
            $app->register($provider);
        }
    }
}
