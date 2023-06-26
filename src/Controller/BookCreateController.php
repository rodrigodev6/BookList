<?php

namespace BookList\Controller;

use BookList\Domain\Infraestructure\Repository\PdoBookRepository;
use BookList\Domain\Model\Book;
use PDO;

class BookCreateController extends BookController
{

    public function create(): void
    {
        require_once __DIR__ . '/../../views/books/create.view.php';
    }

    public function store(): void
    {
        try {
            $book = new Book(
                $this->id(),
                $this->name(),
                $this->theme(),
                $this->price(),
                $this->author(),
                $this->userId()
            );

            $this->pdo->beginTransaction();
            $this->bookRepository->insert($book);
            $this->pdo->commit();

            header('Location: /books');
        } catch (\RuntimeException $e) {
            $this->pdo->rollBack();
            echo $e->getMessage();
        }
    }

    public function price(): float
    {
        $formattedPrice = str_replace(',', '.', str_replace('.','', $_POST['price']));

        if (!is_numeric($formattedPrice)) {
            $formattedPrice = 0;
        }
        return $formattedPrice;
    }

    public function id(): null
    {
        return null;
    }

    public function userId(): int
    {
        return 1;
    }

    public function name(): string
    {
        return $_POST['name'];
    }

    public function theme(): string
    {
        return $_POST['theme'];
    }

    public function author(): string
    {
        return $_POST['author'];
    }
}