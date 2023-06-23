<?php

namespace BookList\Domain\Model\Repository;
use BookList\Domain\Model\User;

interface UserRepository
{
    public function allUsers(): array;
    public function insert(User $user): bool;
    public function delete(User $user): bool;
    public function update(User $user): bool;
}