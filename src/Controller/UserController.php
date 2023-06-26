<?php

namespace BookList\Controller;

use BookList\Domain\Infraestructure\Persistence\PdoConnectionCreator;
use BookList\Domain\Infraestructure\Repository\PdoUserRepository;

class UserController
{
    protected PdoUserRepository $userRepository;
    protected \PDO $pdo;
    public string $page = "users";
    public function __construct()
    {
        $this->pdo = PdoConnectionCreator::creatorConnection();
        $this->userRepository = new PdoUserRepository($this->pdo);
    }
}