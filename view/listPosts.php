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
            <span class="subheading">Retrouvez les Chapitres de cette aventure : </span>
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
while ($post = $posts->fetch())
{
    ?>
        <div class="post-preview">
            <h2 class="post-title">
              <?= (html_entity_decode($post['title'])) ?>
            </h2>
            <h3 class="post-subtitle">
              <?= substr (nl2br(html_entity_decode($post ['content'])), 0, 250) . '...' ?>
              <a href="?controller=PostController&action=showAction&id=<?= $post['id'] ?>" title="Lire le billet" >Lire la suite</a></p>
            
            </h3>
          </a>
          <p class="post-meta">Ajouté le <?= $post['added_datetime_fr'] ?></p>
        </div>
        <hr>
       <?php
}
$posts->closeCursor();
?>
        <hr>
        <!--- <div class="clearfix">
          <a class="btn btn-primary float-right" href="http://localhost/PROJET-4-PHP-BLOG-OP/view/frontend/about.php"> L'Auteur &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr> ----> 

 

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
