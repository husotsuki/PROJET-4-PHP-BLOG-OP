<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  		<meta name="description" content="">
  		<meta name="author" content="">
        <title><?= $title ?></title>
        
        <!-- Bootstrap core CSS -->
  		<link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  		<!-- Custom fonts  -->
		 <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
		 <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		 <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

		 <!-- Custom styles for this website -->
		 <link href="public/css/clean-blog.min.css" rel="stylesheet">

		 <!-- Tinymce -->
	    <script src="public/js/tinymce/tinymce.min.js"></script>
	    <script>
	        tinymce.init({
	            mode : "textareas",
	            editor_selector : "mceEditor"
	        });
	    </script>
    </head>
        
    <body>

    	 <!-- Navigation -->
		  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
		    <div class="container">
		      <a class="navbar-brand" href="http://localhost/PROJET-4-PHP-BLOG-OP/index.php">Billet Simple pour l'Alaska</a>
		      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		        Menu
		        <i class="fas fa-bars"></i>
		      </button>
		      <div class="collapse navbar-collapse" id="navbarResponsive">
		        <ul class="navbar-nav ml-auto">
		          <li class="nav-item">
		            <a class="nav-link" href="index.php">Accueil</a>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link" href="?controller=PostController&action=about">Qui-suis-je ? </a>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link"  href="?controller=PostController&action=indexAction" title="Lire les anciens billets">Les Chapitres </a>
		          </li>
		          <?php
                    if(isset($_SESSION) && empty($_SESSION)) {
                        ?>
                        <li class="nav-item"><a class="nav-link" href="?controller=UserController&action=loginAction" title="Se connecter">Connexion</a></li>
                        <?php
                    }
                    ?>
                    <?php
                    if(isset($_SESSION) && !empty($_SESSION))
                    {
                        ?>
                        <!--<li><a href="?controller=UserController&action=registerAction" title="S'incrire">Inscription</a></li>-->
                        <li class="nav-item"><a class="nav-link" href="?controller=AdminController&action=indexAction" title="Espace d'administration">Administration</a></li>
                        <li class="nav-item" ><a class="nav-link" href="?controller=UserController&action=logoutAction" title="Se déconnecter">Déconnexion</a></li>
                        <?php
                    }
                    ?>
		          
		        </ul>
		      </div>
		    </div>
		  </nav>

        <?= $content ?>

         <!-- Footer -->
		  <footer>
		    <div class="container">
		      <div class="row">
		        <div class="col-lg-8 col-md-10 mx-auto">
		          <ul class="list-inline text-center">
		            <li class="list-inline-item">
		              <a href="#">
		                <span class="fa-stack fa-lg">
		                  <i class="fas fa-circle fa-stack-2x"></i>
		                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
		                </span>
		              </a>
		            </li>
		            <li class="list-inline-item">
		              <a href="#">
		                <span class="fa-stack fa-lg">
		                  <i class="fas fa-circle fa-stack-2x"></i>
		                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
		                </span>
		              </a>
		            </li>
		            <li class="list-inline-item">
		              <a href="#">
		                <span class="fa-stack fa-lg">
		                  <i class="fas fa-circle fa-stack-2x"></i>
		                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
		                </span>
		              </a>
		            </li>
		          </ul>
		          <p class="copyright text-muted">Copyright &copy; Fabio LOPES pour Openclassroom </p>
		        </div>
		      </div>
		    </div>
		  </footer>

		  <!-- Bootstrap core JavaScript -->
		  <script src="public/vendor/jquery/jquery.min.js"></script>
		  <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		  <!-- Custom scripts for this template -->
		  <script src="public/js/clean-blog.min.js"></script>

    </body>
</html>