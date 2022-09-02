<?php

declare(strict_types=1);

namespace Breeze\Application\User\AuthenticateUser;

use Breeze\Application\Hashing\PasswordVerifierInterface;
use Breeze\Application\Repository\UserRepositoryInterface;
use Breeze\Application\Specifications\GetUserByUsernameSpecification;
use Breeze\Application\User\AuthenticateUser\Exceptions\AuthenticationException;

final class AuthenticateUserHandler
{
    public function __construct(
        private readonly UserRepositoryInterface $userRepository,
        private readonly PasswordVerifierInterface $passwordVerifier
    ) { }

    public function handle(AuthenticateUserRequest $authenticateUserRequest): AuthenticateUserResponse
    {
        $getUserByUsernameSpecification = new GetUserByUsernameSpecification($authenticateUserRequest->username);
        $user = $this->userRepository->find($getUserByUsernameSpecification);
        if ($user === null) {
            throw new AuthenticationException("Username or password is invalid");
        }

        if (!$this->passwordVerifier->verifyPassword(plaintext: $authenticateUserRequest->password, hash: $user->getPassword())) {
            throw new AuthenticationException("Invalid password");
        }

        //
    }
}
