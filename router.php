<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [

    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',

];

function abort($error_code = 404) {

    http_response_code($error_code);
    require 'views/' . $error_code . '.php';
    die();
}


function routeToController($uri, $routes) {

    if (array_key_exists($uri, $routes)) {

        require $routes[$uri];
    } else {

        abort();
    }
}

routeToController($uri, $routes);
