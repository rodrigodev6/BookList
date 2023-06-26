<?php

require_once __DIR__ . '/functions.php';

use BookList\Controller\{DashboardController,
    BookListController,
    BookEditController,
    BookDeleteController,
    BookCreateController,
    UserDeleteController,
    UserListController,
    UserCreateController,
    UserEditController};

$routes = [
    '/' => [
        'GET' => [
            'controller' => DashboardController::class,
            'method' => 'index'
        ]
    ],
    '/dashboard' => [
        'GET' => [
            'controller' => DashboardController::class,
            'method' => 'index'
        ]
    ],
    '/books' => [
        'GET' => [
            'controller' => BookListController::class,
            'method' => 'index'
        ]
    ],
    '/bookCreate' => [
        'GET' => [
            'controller' => BookCreateController::class,
            'method' => 'create'
        ],
        'POST' => [
            'controller' => BookCreateController::class,
            'method' => 'store'
        ]
    ],
    '/bookEdit' => [
        'GET' => [
            'controller' => BookEditController::class,
            'method' => 'edit'
        ],
        'POST' => [
            'controller' => BookEditController::class,
            'method' => 'update'
        ]
    ],
    '/bookRemove' => [
        'GET' => [
            'controller' => BookDeleteController::class,
            'method' => 'delete'
        ]
    ],
    '/users' => [
        'GET' => [
            'controller' => UserListController::class,
            'method' => 'index'
        ]
    ],
    '/userRemove' => [
        'GET' => [
            'controller' => UserDeleteController::class,
            'method' => 'delete'
        ]
    ],
    '/userCreate' => [
        'GET' => [
            'controller' => UserCreateController::class,
            'method' => 'create'
        ],
        'POST' => [
            'controller' => UserCreateController::class,
            'method' => 'store'
        ]
    ]
];


routeToController($routes);
