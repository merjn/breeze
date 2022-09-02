<?php

declare(strict_types=1);

namespace Breeze\Application\User\AuthenticateUser;

class AuthenticateUserRequest
{
    public function __construct(
        public readonly string $username,
        public readonly string $password,
        public readonly string $requesterIp
    ) { }
}
