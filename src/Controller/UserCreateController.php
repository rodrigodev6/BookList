<?php

namespace BookList\Controller;

class UserCreateController extends UserController
{

    public function create(): void
    {
        require_once __DIR__ . '/../../views/users/create.view.php';
    }

    public function store()
    {

    }

}