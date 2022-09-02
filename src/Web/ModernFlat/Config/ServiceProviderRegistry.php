<?php

declare(strict_types=1);

namespace Breeze\Web\ModernFlat\Config;

use Breeze\Web\ModernFlat\Providers\RouteServiceProvider;
use Breeze\Web\SharedResources\Config\ServiceProviderRegistryInterface;

class ServiceProviderRegistry implements ServiceProviderRegistryInterface
{
    public function __invoke(): array
    {
        return [
            RouteServiceProvider::class,
        ];
    }
}
