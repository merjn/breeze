<?php

namespace Breeze\Web\ModernFlat\Http\Controllers\Registration;

use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class GenderAndDobStepController
{
    public function __construct(
        private readonly ViewFactory $viewFactory
    ) { }

    public function showGenderAndDobStepForm(): View
    {
        return $this->viewFactory->make('register.gender_and_dob_step');
    }

    public function submitGenderAndDobStepForm()
    {

    }
}
