<!-- Titre de la page -->
<?php $title = 'Administration'; ?>

<!-- Contenu de la page -->
<?php ob_start(); ?>

<!-- Page Header -->
  <header class="masthead" style="background-image: url('public/img/admin.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Espace Administration </h1>
            <span class="subheading">Bienvenue dans l'espace protégé </span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->


  <div class="container">
    
        <h3><u>Publier un article</u></h3>
			<br />
			<br />
			<form action="?controller=AdminController&action=postAction" method="post">
			    <label for="title">Titre :</label></br>
			    <input type="text" id="title" name="title" class="form-control"/></br>
			    <label for="content">Contenu :</label></br>
			    <textarea id="content" name="content" cols="30" rows="5" class="mceEditor"></textarea></br>
			    <button class="btn btn-primary">Publier</button>
			</form>
			<hr>
			<br />

			<!-- Liste des billets en ligne -->
			<?php
			    include 'inc/_onlinePosts.php';
			?>
			<br />

			<!-- Commentaires signalés -->
			<?php
			    include 'inc/_reportedComments.php';
			?>
			<hr>


        


<?php $content = ob_get_clean(); ?>

<!-- Vue requise -->
<?php require('views/template.php'); ?>