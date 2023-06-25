<?php

namespace BookList\Controller;

class BookListController extends BookController
{

    public function index(): void
    {

        $books = $this->bookRepository->allBooks();
        require_once __DIR__ . '/../../views/books/index.view.php';
    }
}