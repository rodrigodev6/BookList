<?php

namespace BookList\Controller;

use BookList\Domain\Infraestructure\Persistence\PdoConnectionCreator;
use BookList\Domain\Infraestructure\Repository\PdoBookRepository;

class BookController
{
    public string $page = "books";

    protected PdoBookRepository $bookRepository;
    protected \PDO $pdo;

    public function __construct()
    {
        $this->pdo = PdoConnectionCreator::creatorConnection();
        $this->bookRepository = new PdoBookRepository($this->pdo);
    }
}