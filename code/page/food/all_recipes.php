<?php
  $path = $_SERVER['DOCUMENT_ROOT']."/wimf/code/";
  require_once $path."conf.inc.php";
  require $path."script/functions.php";
  include $path."header.php";
?>
<div class="col-md-12" id="Select">
  <center>
    <p>
      Vous voulez partager votre recette ?<br>
      Cliquez ici pour alimenter la communauté !
    </p>
    <a href="/wimf/code/page/food/newRecipe.php" class="btn btn-primary">Ajouter ma recette !</a>
  </center>
  <center>
    <h1>Séléction "type de recette"</h1>
  </center>
</div>
<div class="container">
  <div class="main_container row">
  	<form method="POST" action="../../script/searchRecipe.php">
	  	<label>Calories:</label><br>
	  	<div class="form-row" id="calories">
	  		<div class="form-group col-7">
	    		<input type="text" id="caloMin" name="caloMin" placeholder="Minimum" class="form-control">
	    	</div>
	    	<div class="form-group col-7">
	    		<input type="text" id="caloMax" name="caloMax" placeholder="Maximum" class="form-control">
	    	</div>
	    </div><br>
    	<button type="submit">Recherche</button>
	</form>
    <div class="card col-md-4 card_recipe" style="margin: 10px; display:inline;">
      <img class="" src="http://placehold.it/350x300" alt="Card image cap">
    </div>
    <div class="card col-md-7" style="margin: 10px; display:inline;">
      <div class="card-body">
        <h2 class="card-title"></h2>
        <h5>Description</h5>
        <p class="card-text" style="min-height:100px;min-width:100%;"></p>
        <a href="#" class="btn btn-primary">En savoir plus &rarr;</a>
      </div>

      <div class="card-footer text-muted">
        Faite le xx/xx/xxxx par
        <b></b>
      </div>
    </div>

    </div>
  </div>
</div>

<?php
  include $path."footer.php"
?>
