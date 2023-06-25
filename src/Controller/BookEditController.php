<?php

namespace BookList\Controller;

class BookEditController extends BookController
{

    public function edit(): void
    {

        require_once __DIR__ . '/../../views/books/edit.view.php';
    }

    public function update(): void
    {
        dd($_POST);
    }
}