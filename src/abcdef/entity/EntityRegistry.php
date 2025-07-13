<?php

declare(strict_types=1);

namespace abcdef\entity;

class EntityRegistry
{
    private array $entityRegistry = [];

    public function addPlayer(UserEntity $userEntity, string $playerName): void {
        $this->entityRegistry[$playerName] = $userEntity;
    }

    public function getPlayer(string $playerName): ?UserEntity {
        return $this->entityRegistry[$playerName] ?? null;
    }

    public function removePlayer(string $playerName): void {
        unset($this->entityRegistry[$playerName]);
    }
}