<?php

namespace App\controllers;

class mainController extends coreController
{
    /**
     * Méthode s'occupant de la page d'accueil (homepage)
     *
     * @return void
     */
    public function home()
    {
        // 1. Préparation des données

        // 2. Appel de la vue
        $this->show(
            'main/home'
        );
    }
}
