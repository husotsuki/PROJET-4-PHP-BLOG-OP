<?php $title = 'Blog Alaska'; ?>

<?php ob_start(); ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('view/frontend/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Billet Simple pour l'Alaska </h1>
            <span class="subheading">Retrouvez mon récit sur l'Alaska ! </span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->


  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
          <?php
while ($data = $posts->fetch())
{
?>
        <div class="post-preview">
          <a href="index.php?action=post&amp;id=<?=$data['id'] ?>">
            <h2 class="post-title">
              <?= htmlspecialchars($data['title']) ?>
            </h2>
            <h3 class="post-subtitle">
              
            
            </h3>
          </a>
          <p class="post-meta">le <?= $data['creation_date_fr'] ?></p>
        </div>
        <hr>
       <?php
}
$posts->closeCursor();
?>
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="http://localhost/PROJET-4-PHP-BLOG-OP/view/frontend/about.php"> L'Auteur &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr>

 

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
