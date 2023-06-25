<?php

namespace BookList\Controller;

class UserListController extends UserController
{

    public function index(): void
    {
        $userList = $this->userRepository->allUsers();
        require_once __DIR__ . '/../../views/users/index.view.php';
    }

}