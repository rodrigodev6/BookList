<?php

namespace BookList\Controller;

use BookList\Domain\Infraestructure\Persistence\PdoConnectionCreator;
use BookList\Domain\Infraestructure\Repository\PdoBookRepository;

class BookController
{
    public string $page = "books";

    protected PdoBookRepository $bookRepository;

    public function __construct()
    {
        $pdo = PdoConnectionCreator::creatorConnection();
        $this->bookRepository = new PdoBookRepository($pdo);
    }
}