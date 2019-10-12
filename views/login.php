<!-- Titre de la page -->
<?php $title = 'Connexion'; ?>

<!-- Contenu de la page -->
<?php ob_start(); ?>

<!-- Page Header -->
  <header class="masthead" style="background-image: url('public/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Espace de Connexion </h1>
            <span class="subheading">Veuillez rentrer vos identifiants </span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->


  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <h1>Connexion</h1>
		<br />

		<form action="" method="POST">

		    <div class="form-group">
		        <label for="">Pseudo :</label>
		        <input type="text" name="pseudo" class="form-control">
		    </div>

		    <div class="form-group">
		        <label for="">Mot de passe :</label>
		        <input type="password" name="password" class="form-control">
		    </div>

		    <button class="btn btn-primary">Me connecter</button>

		</form>
		<br />


<?php $content = ob_get_clean(); ?>

<!-- Vue requise -->
<?php require('views/template.php'); ?>