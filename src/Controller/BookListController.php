<?php

namespace BookList\Controller;

class BookListController extends BookController
{

    public function index(): void
    {
        //é necessário tratar a formatação do preço antes dele ir para view
        $books = $this->bookRepository->allBooks();

        require_once __DIR__ . '/../../views/books/index.view.php';
    }



}