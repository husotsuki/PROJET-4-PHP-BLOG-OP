<?php $title = 'Dernier chapitre'; ?>

<?php ob_start(); ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('public/img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1><?php echo $lastPost['title'] ?></h1>
            <h2 class="subheading">Dernier chapitre publié par <?php echo $lastPost['author'] ?></h2>
            <span class="meta">Paru le : <?php echo $lastPost['added_datetime_fr'] ?></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
         <p> <?php echo html_entity_decode($lastPost['content']) ?></p>
         <br>
         <a href="?controller=PostController&action=showAction&id=<?= $lastPost['id'] ?>" title="Lire les commentaires">  Lire les commentaires</a>
        </div>
      </div>
    </div>
  </article>

  <hr>

 

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

