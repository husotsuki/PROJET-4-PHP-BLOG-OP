<?php $title = $post->getTitle(); ?>

<?php ob_start(); ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('public/img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1><?php echo html_entity_decode($post->getTitle()) ?></h1>
            <h2 class="subheading">Dernier chapitre publié par <?php echo html_entity_decode($post->getAuthor()) ?></h2>
            <span class="meta">Paru le <?php echo $post->getAddedDatetime() ?></span>
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
         <p> <?php echo html_entity_decode($post->getContent()) ?></p>
         <br>
         <h4>Commentaires :</h4><br />
          <?php
          // Pour chaque commentaire appartenant au billet
          foreach ($comments as $comment) {
              echo "<br />";
              echo "<p>De : " . html_entity_decode($comment->getAuthor()) . ", ajouté le : " . $comment->getAddedDatetime() . "</br>";
              echo html_entity_decode($comment->getContent()) . "<br />";
              echo '<a href="?controller=PostController&action=alertCommentAction&id=' . $comment->getId() . '&post_id=' . $comment->getPostId() . '" onclick="return(confirm(\'ATTENTION ! Voulez-vous vraiment signaler ce commentaire ?\'))">Signaler</a>';
              echo "<br />";
          }
          ?>
          <hr>

          <h4>Ajouter un commentaire : </h4><br />
          <form action="?controller=PostController&action=addCommentAction&id=<?php echo $_GET['id'] ?>" method="post">
              <label for="author">Auteur : </label></br>
              <input type="text" id="author" name="author" class="form-control" value="<?php if(isset($_COOKIE['author'])) { echo $_COOKIE['author']; } ?>"/></br>
              <label for="content">Contenu : </label></br>
              <textarea id="content" name="content" class="form-control" value=""></textarea></br>
              <button class="btn btn-primary">Publier</button>
          </form>
         
        </div>
      </div>
    </div>
  </article>

  <hr>

 

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

