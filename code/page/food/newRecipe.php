<?php
  session_start();
  $path = $_SERVER['DOCUMENT_ROOT']."/wimf/code/";
	require $path."script/functions.php";
	include $path."header.php";
  error_reporting(E_ALL ^ E_NOTICE);



?>
<!-- PROVISOIRE -->
<style type="text/css">
  body{
    margin-bottom: 150px;
  }
  footer {
    position: fixed;
    bottom:0px;
    left: 25.3%;
    width: 49.4%;
    text-align: center;
  }
</style>

<script src = "/wimf/code/script/addElement.js"></script>
<?php
  if ( isset( $_GET[ 'succes' ] ) ){
    if ( $_GET[ 'succes' ] == 'error' ){
      echo '<center>
              <div class="alert alert-danger alert-dismissible box-alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Erreur !</strong> Votre recette n\'a pas été créze.
              </div>
            </center>';
    }
  }
?>
<div class="row rowsignup">
  <div class="col-md-6 div_center-newRecipe">
    <h2 class="center-newRecipe">Enregistrer une nouvelle recette</h2>
    <div class="sl-box-newRecipe" id="recipe-box">
      <!-- GESTION D'ERREUR -->
      <?php
        if ( isset( $_SESSION[ "errorsForm" ] ) ) {
          foreach( $_SESSION[ "errorsForm" ] as $keyError )
            echo "<li style='color:red'>".$errorsOfForm[ $keyError ]."</li>";
          unset( $_SESSION[ "errorsForm" ] );
        }
      ?>

      <form method="POST" action="/wimf/code/script/saveRecipe.php" id="formRecipe">

        <!-- NOM DE RECETTE -->
        <div class="form-row">
          <div class="form-group col">
            <p>Nom de la recette</p>
            <input type="text" class="form-control" placeholder="Nom de la recette *" name="recipe_name" required="required">
          </div>
        </div>

        <!-- DUREE -->
        <div  class="form-row">
          <div class="form-group col-4">
            <p><center>Temps total</center></p>
            <input type="time" class="form-control" value="00:00" name="recipe_total_time" required="required" >
          </div>

          <div class="form-group col-4">
            <p><center>Temps de cuisson</center></p>
            <input type="time" class="form-control" value="00:00" name="recipe_baking" required="required" >
          </div>

          <div class="form-group col-4">
            <p><center>Temps de réalisation</center></p>
            <input type="time" class="form-control" value="00:00" name="recipe_time" required="required" >
          </div>
        </div>

        <!-- DIFFICULTE -->
        <div class="form-row col">
          <div class="form-group col-6">
            <p>
              <center>Difficultée de la recette</center>
            </p>
          </div>
          <?php foreach ( $listOfDifficult as $key => $value ) { ?>
          <div class="form-group form-check-inline">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="recipe_difficult" value="<?php echo $key ?>"
              <?php echo ( $key == $defaultDifficult ) ? 'checked="checked"' : ''; ?>>
              <?php echo $value ?>
            </label>
          </div>
          <?php } ?>
        </div>

        <!-- TOTAL CALORIQUE -->
        <div class="form-group col-6">
          <p>Total calorique</p>
          <input type="number" class="form-control" placeholder="0Kcal" name="recipe_kcal">
        </div>

        <!-- INGREDIENT -->
        <div class="form-group col-6" id="ingField">
          <p onclick="addIngField()">Ingrédient(s)<br>Pour ajouter un ingrédient cliquez <a href="javascript:void(0)">ici</a></p>
          <select class="form-control col"  id="ingField_1" name="ingField_1">
            <?php
              $listOfIngredient = [];
              $connection = connectDB();
              $listOfIngredient = $connection->query( "SELECT * FROM ingredient" );
              foreach ( $listOfIngredient as $key => $value ) {
                foreach ( $value as $ing => $ing_value ) {
                  if ( !is_numeric( $ing ) && !is_numeric( $ing_value ) ) {
                    echo '<option>'.$ing_value.'</option>';
                  }
                }
              }
            ?>
          </select>
        </div>

        <!-- INSTRUCTIONS -->
        <div class="form-row col-6">
          <div class="col-12">
            <p>Instruction(s) de préparation<br> Minimum 100 mots</p>
          </div>
          <div class="col">
            <textarea class = "form-control col" name="recipe_instruction" id="article1" onkeyup="countWord(this.form.recipe_instruction.value, this.form)" style="min-height:200px;"></textarea>
            <input type="text" name="count_word" value="0 Mots écrits" style="background: transparent; border: 0px; text-align:center;" style="" readonly >
          </div>
        </div>

        <!-- ILLUSTRATIONS -->
        <div class="form-group col-6" id = "imgField" style="margin-top:5px;">
          <p>Illustration<br></p>
          <input class="form-control col" type="file" name="img">
        </div>
        <input class="btn btn-primary" type="submit" value="Enregister ma recette" id="btn-submit-newRecipe" onclick="recupCountRecipe()">

      </form>

    </div>
  </div>
</div>
<?php include $path."footer.php" ?>
