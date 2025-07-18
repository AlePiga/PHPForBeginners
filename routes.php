<?php

$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/notes', 'controllers/notes/index.php');
$router->get('/note', 'controllers/notes/show.php');
$router->get('/notes/create', 'controllers/notes/create.php');
$router->get('/contact', 'controllers/contact.php');
$router->get('/note/edit', 'controllers/notes/edit.php');

$router->delete('/note', 'controllers/notes/destroy.php');

$router->post('/notes', 'controllers/notes/store.php');
$router->post('/register', 'controllers/registration/store.php');

$router->patch('/note', 'controllers/notes/update.php');

$router->get('/register', 'controllers/registration/create.php');
