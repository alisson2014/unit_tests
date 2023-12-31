<?php

declare(strict_types=1);

namespace Alura\Auction\Model;

class User
{
    public function __construct(
        private string $name
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }
}
