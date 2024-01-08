<?php

namespace App\controllers;

abstract class coreController
{
    public function __construct()
    {
      // Empty...
    }

    /**
     * Méthode permettant d'afficher du code HTML en se basant sur les views
     *
     * @param string $viewName Nom du fichier de vue
     * @param array $viewData Tableau des données à transmettre aux vues
     * @return void
     */
    protected function show(string $viewName, $viewData = [])
    {
        // Globalise $router
        global $router;

        // Définit la page actuelle dans les données de vue
        $viewData['currentPage'] = $viewName;
        // Définit l'url absolue pour les assets
        $viewData['assetsBaseUri'] = $_SERVER['BASE_URI'] . '/assets';
        // Définit l'url absolue pour la racine du site
        $viewData['baseUri'] = $_SERVER['BASE_URI'];

        // Extrait les données de vue pour rendre les clés accessibles en tant que variables dans la portée locale
        extract($viewData);
        // => la variable $currentPage existe désormais, et sa valeur est $viewName
        // => la variable $assetsBaseUri existe désormais, et sa valeur est $_SERVER['BASE_URI'] . '/assets/'
        // => la variable $baseUri existe désormais, et sa valeur est $_SERVER['BASE_URI']

        // Inclut les fichiers de vue nécessaires avec le layout standard
        require_once __DIR__ . '/../views/layout/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/layout/footer.tpl.php';
    }
}
