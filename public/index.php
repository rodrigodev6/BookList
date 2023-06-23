<?php


use BookList\Domain\Infraestructure\Persistence\PdoConnectionCreator;
use BookList\Domain\Infraestructure\Repository\PdoBookRepository;
use BookList\Domain\Infraestructure\Repository\PdoUserRepository;
use BookList\Controller\{
    DashboardController,
    BookController,
    UserController
};
require_once __DIR__ . '/../vendor/autoload.php';

$pdo = PdoConnectionCreator::creatorConnection();
$bookRepository = new PdoBookRepository($pdo);
$userRepository = new PdoUserRepository($pdo);

$userController = new UserController($userRepository);
$bookController = new BookController($bookRepository);
$dashboardController = new DashboardController();




