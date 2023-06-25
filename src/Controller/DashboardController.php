<?php

namespace BookList\Controller;

class DashboardController
{
    public string $page = "dashboard";

    public function index()
    {
        require_once __DIR__ . '/../../views/dashboard.view.php';
    }

}