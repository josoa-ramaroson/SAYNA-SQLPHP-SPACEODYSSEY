<?php


$router->get('/', 'index.php');
$router->get('/dashboard', 'index.php');


$router->get('/missions','missions/show.php');
$router->get('/missions/create','missions/create.php');


$router->get('/spaceships',"vaisseaux/show.php");
$router->get('/spaceships/create', "vaisseaux/create.php");
$router->get('/spaceships/edit', "vaisseaux/edit.php");

$router->post('/spaceships/store', 'vaisseaux/store.php');
$router->patch('/spaceships', 'vaisseaux/update.php');
$router->delete('/spaceships', 'vaisseaux/delete.php');


$router->get('/planets', "planetes/show.php");
$router->get('/planets/create', "planetes/create.php");
$router->get('/planets/edit', "planetes/edit.php");
$router->patch('/planets', 'planetes/update.php');

$router->post('/planets/store', "planetes/store.php");
$router->delete('/planets', 'planetes/delete.php');
