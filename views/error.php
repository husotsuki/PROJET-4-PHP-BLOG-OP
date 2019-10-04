<?php $title = 'Erreur'; ?>

<?php ob_start(); ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/about-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Oups... Cette page n'existe pas !</h1>
            <span class="subheading">C'est pas grave ! </span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <h2><a href="index.php" title="Accueil">Revenir à l'accueil du site</a></h4>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
