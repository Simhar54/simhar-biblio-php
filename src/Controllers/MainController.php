<?php
namespace App\Controllers;

/**
 * Classe de base pour les contrôleurs de l'application.
 * Fournit des méthodes communes pour les contrôleurs.
 */
class MainController {
    /**
     * Affiche une vue avec les données fournies.
     * @param string $viewName Le nom de la vue à afficher.
     * @param array $data Les données à passer à la vue (par défaut vide).
     * @return void
     * @throws \Exception Si le fichier de vue n'existe pas.
     * @note Cette méthode est protégée pour empêcher son appel direct depuis l'extérieur de la classe.
     
     */
    protected function render($viewName, $data = []) {
        // Convertit les clés du tableau associatif en variables
        extract($data);
        
        try {
            // Vérifie si le fichier de vue existe avant de l'inclure
            $filePath = "src/views/$viewName.php";
            if (!file_exists($filePath)) {
                throw new \Exception("Le fichier de vue $filePath n'existe pas.");
            }
            
            // Inclut le fichier de vue, où les données sont maintenant accessibles comme des variables
            require_once $filePath;
        } catch (\Exception $e) {
            // Gérer l'exception, par exemple en affichant un message d'erreur
            echo "Erreur: " . $e->getMessage();
        }
    }
}