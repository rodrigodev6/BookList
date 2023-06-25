<?php

namespace BookList\Controller;

class UserEditController extends UserController
{

    public function edit(): void
    {
        
        require_once __DIR__ . '/../../views/users/edit.view.php';
    }

    public function update(): void
    {
        dd($_POST);
    }
}