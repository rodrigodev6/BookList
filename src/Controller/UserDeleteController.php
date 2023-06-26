<?php

namespace BookList\Controller;

class UserDeleteController extends UserController
{
    public function delete(): void
    {

        try {
            $this->pdo->beginTransaction();
            $this->userRepository->delete($this->id());
            $this->pdo->commit();

            header('Location: /users?success=1');
        } catch (\RuntimeException $e) {
            $this->pdo->rollBack();
            header('Location: /users?success=0');
        }
    }

    public function id(): int
    {
        return filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    }
}