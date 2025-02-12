<?php


// return [
//     '/' => 'controller/home.php',
//     '/about' => 'controller/aboutus.php',
//     '/contact' => 'controller/contact.php',
//     '/notes' => 'controller/notes/index.php',
//     '/notes/create' => 'controller/notes/create.php',
//     '/note' => 'controller/notes/show.php',
// ];

$router->get('/', 'controller/home.php');
$router->get('/about', 'controller/aboutus.php');
$router->get('/contact', 'controller/contact.php');

$router->get('/notes', 'controller/notes/index.php');
$router->get('/note', 'controller/notes/show.php');
// $router->patch('/note', 'controller/notes/edit.php');

$router->get('/note/edit', 'controller/notes/edit.php');

$router->get('/notes/create', 'controller/notes/create.php');
$router->delete('/note', 'controller/notes/destroy.php');
// $router->post('/notes', 'controller/notes/store.php');
