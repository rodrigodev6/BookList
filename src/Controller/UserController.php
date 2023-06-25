<?php

namespace BookList\Controller;

use BookList\Domain\Infraestructure\Persistence\PdoConnectionCreator;
use BookList\Domain\Infraestructure\Repository\PdoUserRepository;

class UserController
{
    protected PdoUserRepository $userRepository;
    public string $page = "users";

    public function __construct()
    {
        $pdo = PdoConnectionCreator::creatorConnection();
        $this->userRepository = new PdoUserRepository($pdo);
    }
}