<!-- Titre de la page -->
<?php $title = 'Modifier un billet'; ?>

<!-- Contenu de la page -->
<?php ob_start(); ?>

<!-- Page Header -->
  <header class="masthead" style="background-image: url('public/img/home-bg.jpg')">
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
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <h3>Modifier un billet :</h3>

		<form action="?controller=AdminController&action=editPostAction&id=<?php echo $post->getId() ?>" method="post">
		    <label for="title">Titre :</label></br>
		    <input type="text" id="title" name="title" class="form-control" value="<?php echo $post->getTitle() ?>"></br>
		    <label for="content">Contenu :</label></br>
		    <textarea name="content" id="content" cols="30" rows="10" class="mceEditor"><?php echo $post->getContent() ?></textarea></br>
		    <button class="btn btn-primary">Modifier</button>
		</form>
		<hr>


<?php $content = ob_get_clean(); ?>

<!-- Vue requise -->
<?php require('views/template.php'); ?>