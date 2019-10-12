<?php $title = 'Blog Alaska'; ?>

<?php ob_start(); ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('public/img/author.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Qui suis-je ?</h1>
            <span class="subheading">Jean Forteroche</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p>
                À 22 ans, je souhaite enrichir mon imagination et décide donc de quitter la France pour m'exiler quelques temps aux États-Unis. <br>
                Ce long voyage, mes rencontres, développeront chez moi des projets de roman. <br>
                En 2003, j'écris mon premier roman : "Le champ du feu", mais c'est le suivant, "Un jour viendra..." qui consacre ma rencontre avec le public. <br>
                Aujourd'hui, je revient avec un nouveau roman "Billet simple pour l'Alaska",inspiré par mes vacances passées en Alaska. <br>
                Je décide cette fois de mettre en avant première, mon livre sur le web. <br>
                Mais pas de panique, une édition est prévue d'ici la fin de l'année 2019 pour ceux et celles qui désirent tourner les pages d'un livre. 
        </p>      
      </div>
    </div>
  </div>

  <hr>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
