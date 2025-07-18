<?php

declare(strict_types=1);

namespace abcdef\data;

readonly class UserCreationData {

    public function __construct(
        private string $username,
        private int    $lastPlayerActionTime
    ){}

    public function getUsername(): string {
        return $this->username;
    }

    public function getLastPlayerActionTime(): int {
        return $this->lastPlayerActionTime;
    }

}