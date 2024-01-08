<?php

namespace App\controllers;

// Classe gérant les erreurs (403, 404)
class errorController extends coreController
{
  /**
   * Méthode gérant l'affichage de la page 403
   *
   * @return void
   */
  public function error403()
  {
      // Envoie le header 403
      header('HTTP/1.0 403 Forbidden');

      // Gère l'affichage
      $this->show('error/error403');
  }

  /**
   * Méthode gérant l'affichage de la page 404
   *
   * @return void
   */
  public function error404()
  {
      // Envoie le header 404
      header('HTTP/1.0 404 Not Found');

      // Gère l'affichage
      $this->show('error/error404');
  }
}
