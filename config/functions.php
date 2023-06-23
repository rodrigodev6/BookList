<?php

function routeToController($uri, $routes): void
{

if(array_key_exists($uri, $routes)) {
        require_once __DIR__ . $routes[$uri];
    } else {
        httpError(404);
    }

}

function httpError($code): void
{
    http_response_code($code);
    require_once __DIR__ . '/../views/404.view.php';
}

