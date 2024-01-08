<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="<?= $assetsBaseUri ?>/css/reset.css">
  <link rel="stylesheet" href="<?= $assetsBaseUri ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $assetsBaseUri ?>/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= $assetsBaseUri ?>/css/styles.css">


  <link rel="shortcut icon" href="<?= $assetsBaseUri ?>/images/shop.png" type="image/x-icon">

  <title>oShop</title>
</head>

<body>
  <header>
    <div class="top-bar">
      <div class="container-fluid">
        <div class="row d-flex align-items-center">
          <div class="col-sm-7 d-none d-sm-block">
            <ul class="list-inline mb-0">
              <li class="list-inline-item pr-3 mr-0">
                <i class="fa fa-phone"></i> 01 02 03 04 05
              </li>
              <li class="list-inline-item px-3 border-left d-none d-lg-inline-block">Livraison offerte à partir de 100€</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-sticky navbar-airy navbar-light">
      <div class="container-fluid">
        <!-- Navbar Header  -->
        <a href="<?= $router->generate('main-home') ?>" class="navbar-brand">oShop</a>
        <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
        <!-- Navbar Collapse -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a href="<?= $router->generate('main-home') ?>" class="nav-link active">Accueil</a>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Catégories</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="products_list.html">Bleach</a>
                  <a class="dropdown-item" href="products_list.html">Demon Slayer</a>
                  <a class="dropdown-item" href="products_list.html">Hunter x Hunter</a>
                  <a class="dropdown-item" href="products_list.html">My Hero Academia</a>
                  <a class="dropdown-item" href="products_list.html">Naruto</a>
                  <a class="dropdown-item" href="products_list.html">One Piece</a>
                  <a class="dropdown-item" href="products_list.html">Tokyo Revengers</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>