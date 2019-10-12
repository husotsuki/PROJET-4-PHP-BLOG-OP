<!-- Titre de la page -->
<?php $title = 'Inscription'; ?>

<!-- Contenu de la page -->
<?php ob_start(); ?>

<!-- Page Header -->
  <header class="masthead" style="background-image: url('public/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Inscription </h1>
            <span class="subheading">Pour vous inscrire suivez les intructions !  </span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->


  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <h1>Inscription</h1>
		<br />

		<form action="" method="POST">

		    <div class="form-group">
		        <label for="">Pseudo :</label>
		        <input type="text" name="pseudo" class="form-control" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>">
		    </div>

		    <div class="form-group">
		        <label for="">Mot de passe :</label>
		        <input type="password" name="password" class="form-control">
		    </div>

		    <div class="form-group">
		        <label for="">Confirmez le mot de passe :</label>
		        <input type="password" name="password_confirm" class="form-control">
		    </div>

		    <div class="form-group">
		        <label for="">Email :</label>
		        <input type="email" name="email" class="form-control" value="<?php if(isset($email)) { echo $email; } ?>">
		    </div>

		    <button type="submit" class="btn btn-primary">M'inscrire</button>

		</form>
		<hr>



<?php $content = ob_get_clean(); ?>

<!-- Vue requise -->
<?php require('views/template.php'); ?>