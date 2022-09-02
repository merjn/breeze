<?php

namespace Breeze\Web\ModernFlat\Http;

use Breeze\Web\SharedResources\Middleware\EncryptCookies;
use Breeze\Web\SharedResources\Middleware\VerifyCsrfToken;
use Breeze\Web\SharedResources\SharedHttpKernel;

class Kernel extends SharedHttpKernel
{
    /**
     * The application's route middleware groups.
     *
     * @var array<string, array<int, class-string|string>>
     */
    protected $middlewareGroups = [
        'web' => [
            EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];
}
