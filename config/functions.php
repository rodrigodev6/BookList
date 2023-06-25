<?php

function routeToController(array $routes): void
{
    $currentRoute = parse_url($_SERVER['REQUEST_URI'])['path'];
    $requestMethod = $_SERVER['REQUEST_METHOD'];

    if (isset($routes[$currentRoute][$requestMethod])) {
        $route = $routes[$currentRoute][$requestMethod];
        $controller = new $route['controller']();
        $method = $route['method'];
        $controller->$method();
    } else {
        abort();
    }
}

function abort($code = 404): void
{
    http_response_code($code);
    require_once __DIR__ . '/../views/404.view.php';
}