<?php

namespace BookList\Controller;

class BookDeleteController extends BookController
{
    public function delete()
    {

        try {
            $this->pdo->beginTransaction();
            $book = $this->bookRepository->delete($this->id());
            if (!$book) {
                dd("porra");
            }
            $this->pdo->commit();

            header('Location: /books?success=1');
        } catch (\RuntimeException $e) {
            $this->pdo->rollBack();
            header('Location: /books?success=0');
        }
    }

    public function id(): int
    {
        return filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    }
}