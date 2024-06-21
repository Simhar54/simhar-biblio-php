<?php

namespace Core;

use Core\RouteManager;
/**
 * Classe Router pour gérer la logique de routage.
 * Utilise RouteManager pour trouver l'action appropriée basée sur l'URL demandée.
 */
class Router {
    /**
     * Instance de RouteManager pour gérer les routes.
     * @var RouteManager
     */
    private $routeManager;

    /**
     * Constructeur pour Router.
     * @param RouteManager $routeManager Une instance de RouteManager pour gérer les routes.
     */
    public function __construct(RouteManager $routeManager) {
        $this->routeManager = $routeManager;
    }

    /**
     * Traite une requête entrante et exécute l'action correspondante.
     * @param string $url L'URL demandée.
     */
    public function handleRequest($url) {
        $action = $this->routeManager->findActionByUrl($url);
        if ($action !== null) {
            call_user_func($action);
        } else {
            // Gérer l'absence de route correspondante
            echo "404 Not Found";
        }
    }
}