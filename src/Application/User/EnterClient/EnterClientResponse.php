<?php

namespace Breeze\Application\User\EnterClient;

class EnterClientResponse
{
    public function __construct(
        public readonly string $ssoTicket
    ) { }
}
