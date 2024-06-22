<?php
require __DIR__ . '/vendor/autoload.php';

session_start();



use App\Core\RouteManager;
use App\Core\Router;
use App\Controllers\Home\HomeController;

$routeManager = new RouteManager();

$routeManager->addRoute('/', [new HomeController(), 'index']);
// Ajoutez vos routes ici
// $routeManager->addRoute('chemin', 'NomDeLaFonction');

$router = new  Router($routeManager);

// Obtenez l'URL demandée. Vous devrez peut-être ajuster cela selon votre configuration.
$url = $_SERVER['REQUEST_URI'];

$router->handleRequest($url);