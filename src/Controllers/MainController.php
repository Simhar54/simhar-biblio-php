<?php

namespace App\Controllers;

/**
 * Classe de base pour les contrôleurs de l'application.
 * Fournit des méthodes communes pour les contrôleurs.
 */
class MainController
{
    /**
     * Affiche une vue avec les données fournies.
     * @param string $viewName Le nom de la vue à afficher.
     * @param array $data Les données à passer à la vue (par défaut vide).
     * @return void
     * @throws \Exception Si le fichier de vue n'existe pas.
     * @note Cette méthode est protégée pour empêcher son appel direct depuis l'extérieur de la classe.
     
     */
    protected function render($viewName, $data = [])
    {
        // Convertit les clés du tableau associatif en variables
        extract($data);

        try {
            // Chemin vers les fichiers partiels
            $headerPath = "src/Views/Partials/header.php";
            $footerPath = "src/Views/Partials/footer.php";

            // Vérifie si le fichier de vue existe avant de l'inclure
            $filePath = "src/Views/$viewName.php";
            if (!file_exists($filePath)) {
                throw new \Exception("Le fichier de vue $filePath n'existe pas.");
            }

            // Inclut la navbar
            if (file_exists($headerPath)) {
                require_once $headerPath;
            } else {
                throw new \Exception("Le fichier du header $headerPath n'existe pas.");
            }

            // Inclut le fichier de vue, où les données sont maintenant accessibles comme des variables
            require_once $filePath;

            // Inclut le footer
            if (file_exists($footerPath)) {
                require_once $footerPath;
            } else {
                throw new \Exception("Le fichier du footer $footerPath n'existe pas.");
            }
        } catch (\Exception $e) {
            // Gérer l'exception, par exemple en affichant un message d'erreur
            echo "Erreur: " . $e->getMessage();
        }
    }
}
