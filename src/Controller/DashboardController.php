<?php

namespace BookList\Controller;

class DashboardController extends BookController
{
    public string $page = "dashboard";

    public function index()
    {
        $totalBooks = count($this->bookRepository->allBooks());

        require_once __DIR__ . '/../../views/dashboard.view.php';
    }

}