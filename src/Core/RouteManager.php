<?php

namespace App\Core;

/**
 * Classe pour gérer les routes de l'application.
 * Stocke les routes et fournit une fonction pour trouver une action basée sur l'URL.
 */
class RouteManager {
    /**
     * Tableau associatif des routes.
     * Clé : chemin de la route, Valeur : action à exécuter.
     * @var array
     */
    private $routes = [];

    /**
     * Ajoute une route au gestionnaire.
     * @param string $path Le chemin de la route.
     * @param callable $action L'action à exécuter lorsque cette route est demandée.
     */
    public function addRoute($path, $action) {
        $this->routes[$path] = $action;
    }

    /**
     * Trouve l'action associée à une URL donnée.
     * @param string $url L'URL demandée.
     * @return callable|null L'action à exécuter, ou null si aucune route correspondante n'est trouvée.
     */
    public function findActionByUrl($url) {
        return $this->routes[$url] ?? null;
    }
}