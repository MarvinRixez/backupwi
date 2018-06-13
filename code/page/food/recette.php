<?php
  $path = $_SERVER['DOCUMENT_ROOT']."/wimf/code/";
  require_once $path."conf.inc.php";
  require $path."script/functions.php";
  include $path."header.php";
?>
<div class="container">
  <div class="row">
    <div class="main_container">

      <center>
        <a href="/wimf/index.php">Accueil/</a>
        <a href="/wimf/all_recipe.php">Recettes/</a>
        <a href="/wimf/all_recipe.php/">Requete sql recuperation nom de recette</a>
        <h1> Nom de la recette </h1>
      </center>

      <div class="col-md-12" id="div_author">
        <center>
          <h6>Auteur :</h6>
          <a href="users/"><?php echo 'Requete sql recup nom autheur a faire'; ?></a>
          <div class="rating"><!--
         --><a href="#5" title="Donner 5 étoiles">☆</a><!--
         --><a href="#4" title="Donner 4 étoiles">☆</a><!--
         --><a href="#3" title="Donner 3 étoiles">☆</a><!--
         --><a href="#2" title="Donner 2 étoiles">☆</a><!--
         --><a href="#1" title="Donner 1 étoile">☆</a>
          </div>
          <a  href="#" class="btn btn-primary btn-default">Catégorie</a>
        </center>
      </div>

      <div class="div_img_recipe col-md-6 class="zoom"" style="height: 500px; display: inline;">
        <img src="http://via.placeholder.com/500x300">
      </div>

      <div class="div_img_recipe" style="height: 500px;">
        <img src="http://via.placeholder.com/100x100" id="img_recipe_1">
        <img src="http://via.placeholder.com/100x100" id="img_recipe_2">
        <img src="http://via.placeholder.com/100x100" id="img_recipe_3">
        <img src="http://via.placeholder.com/100x100" id="img_recipe_4">
      </div>

      <div class="row" style="margin-top: 75px;">
        <div class="div_recipe col-md-6">
          <b>Ingrédients</b>
          <div>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>
        </div>

        <div class="div_recipe col-md-6">
          <b>Préparation</b>
          <div>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>
        </div>
        <div class="col-md-12" style="margin-top: 50px;">
          <center>
            <b>Commentaire(s)</b>
          </center>
          <div class="comment_div">
            <hr>
            <a href="users/"><?php echo 'Requete sql recup nom autheur a faire'; ?></a>
            <div class="rating_comment"><!--
           --><a href="#5" title="Donner 5 étoiles">☆</a><!--
           --><a href="#4" title="Donner 4 étoiles">☆</a><!--
           --><a href="#3" title="Donner 3 étoiles">☆</a><!--
           --><a href="#2" title="Donner 2 étoiles">☆</a><!--
           --><a href="#1" title="Donner 1 étoile">☆</a>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <hr>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  include $path."footer.php"
?>
