<?php

declare(strict_types=1);

namespace Breeze\Web\ModernFlat\Http\Controllers;

use Illuminate\Contracts\View\Factory as ViewFactory;

class HomepageController
{
    public function __construct(
        private readonly ViewFactory $viewFactory
    ) { }

    public function __invoke()
    {
        return $this->viewFactory->make('home.index');
    }
}
