<?php

declare(strict_types=1);

namespace Breeze\Web\ModernFlat\Http\Controllers;

use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomepageController
{
    public function __construct(
        private readonly ViewFactory $viewFactory
    ) { }

    /**
     * Render the home page.
     *
     * @param Request $request
     * @return View
     */
    public function __invoke(Request $request): View
    {
        return $this->viewFactory->make('home.index')->with('username', $request->session()->get('username'));
    }
}
