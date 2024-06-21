<?php

require_once 'src/Core/RouteManager.php';
require_once 'src/Core/Router.php';

$routeManager = new RouteManager();
// Ajoutez vos routes ici
// $routeManager->addRoute('chemin', 'NomDeLaFonction');

$router = new Router($routeManager);

// Obtenez l'URL demandée. Vous devrez peut-être ajuster cela selon votre configuration.
$url = $_SERVER['REQUEST_URI'];

$router->handleRequest($url);