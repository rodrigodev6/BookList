<?php

namespace BookList\Controller;

use BookList\Domain\Model\Book;

class BookEditController extends BookController
{
    private $book;
    public function edit(): void
    {
        $book = $this->book();
        require_once __DIR__ . '/../../views/books/edit.view.php';
    }

    public function book(): array
    {
        $id = $_GET['id'];
        return $this->bookRepository->book($id);
    }

    public function price(float $price): string
    {
        return number_format($price, 2, ',', '.');
    }

    public function update(): void
    {
        $method = $_REQUEST['_method'];
        $price = floatval(str_replace(',', '.', str_replace('.', '', $_REQUEST['price'])));

        try {
            $book = new Book(
                $_REQUEST['id'],
                $_REQUEST['name'],
                $_REQUEST['theme'],
                $price,
                $_REQUEST['author'],
                $_REQUEST['userId']
            );


            $this->pdo->beginTransaction();
            $this->bookRepository->update($book);
            $this->pdo->commit();
            header('Location: /books?success=1');

        } catch (\RuntimeException $e) {
            $this->pdo->rollBack();
            echo $e;
            header("Location: /books?success=0");
        }
    }
}





















