<?php

declare(strict_types=1);

namespace abcdef\entity;

use abcdef\data\UserData;

readonly class UserEntity {
    public function __construct(
        private UserData $data
    ){}

    public function getData(): UserData {
        return $this->data;
    }
}