<?php

declare(strict_types=1);

namespace Breeze\Application\Specifications;

use Happyr\DoctrineSpecification\Spec;
use Happyr\DoctrineSpecification\Specification\BaseSpecification;

class GetUserByUsernameSpecification extends BaseSpecification
{
    private readonly string $username;

    public function __construct(string $username, ?string $context = null)
    {
        parent::__construct($context);

        $this->username = $username;
    }

    protected function getSpec()
    {
        return Spec::eq('user.username', $this->username);
    }
}
