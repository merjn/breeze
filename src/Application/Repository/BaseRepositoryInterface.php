<?php

namespace Breeze\Application\Repository;

use Happyr\DoctrineSpecification\Specification\BaseSpecification;

interface BaseRepositoryInterface
{
    public function find(BaseSpecification $baseSpecification);

    public function has(BaseSpecification $baseSpecification): bool;
}
