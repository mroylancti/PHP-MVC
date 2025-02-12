<?php
const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/functions.php';
// require base_path('Database.php');
// require base_path('Response.php');

spl_autoload_register(function ($class) {


    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    require base_path("{$class}.php");
    // dd($class);
    // require base_path($class . '.php');
});

require base_path('views/bootstrap.php');

// require base_path('Core/router.php');

$router = new \Core\Router();



$routes = require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
// routeToController($uri, $routes);
$router->route($uri, 'GET');
