<?php

namespace BookList\Controller;

class BookCreateController extends BookController
{

    public function create(): void
    {
        require_once __DIR__ . '/../../views/books/create.view.php';
    }

    public function store(): void
    {
        dd("hora de criar um usuário");
    }
}