<?php

declare(strict_types=1);

namespace abcdef\service;

use abcdef\data\UserCreationData;
use abcdef\data\UserData;
use abcdef\entity\EntityRegistry;

class UserService {

    private EntityRegistry $entityRegistry;

    public function __construct() {
        $this->entityRegistry = new EntityRegistry();
    }

    public function createUserDTO(?UserCreationData $data): ?UserData {
        if ($data === null) {
            return null;
        }
        return new UserData($data->getUsername(), $data->getLastPlayerActionTime());
    }

    public function getEntityRegistry(): ?EntityRegistry {
        return $this->entityRegistry;
    }

}