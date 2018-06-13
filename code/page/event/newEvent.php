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
<div class="row rowsignup">
  <div class="col-md-6 div_center-newEvent">
    <?php
      if ( isset( $_GET[ 'succes' ] ) ){
        if ( $_GET[ 'succes' ] == 'error' ){
          echo '<center>
                  <div class="alert alert-danger alert-dismissible box-alert">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Erreur !</strong> Votre événement n\'a pas été crée.
                  </div>
                </center>';
        }
      }
    ?>
    <h2 class="center-newEvent">Organiser un nouvel événement</h2>
    <div class="sl-box-newEvent" id="event-box">

      <!-- GESTION D'ERREUR -->
      <?php
        if ( isset( $_SESSION[ "errorsForm" ] ) ) {
          foreach( $_SESSION[ "errorsForm" ] as $keyError )
            echo "<li style='color:red'>".$errorsOfForm[ $keyError ]."</li>";
          unset( $_SESSION[ "errorsForm" ] );
        }
      ?>

      <form method="POST" action="/wimf/code/script/saveEvent.php" id="formEvent">

        <!-- NOM DE L'EVENEMENT -->
        <div class="form-row">
          <div class="form-group col-8 center-newEvent padding-newEvent">
            <p>Nom de l'événement</p>
            <input type="text" class="form-control" placeholder="Nom de l'événement" name="event_name" required="required">
          </div>
        </div>


        <div  class="form-row center-newEvent">

          <!-- THEME CULINAIRE-->
          <div class="form-group col-5 center-newEvent padding-newEvent">
            <p><center>Thème culinaire</center></p>
            <input type="text" class="form-control" placeholder="Thème *" name="event_theme" required="required" >
          </div>

          <!-- DIFFICULTEE DE L'EVENT -->
          <div class="form-group col-5 center-newEvent padding-newEvent">
            <p><center>Difficultée de l'événement</center></p>
            <?php foreach ( $listOfDifficult as $key => $value ) { ?>
            <div class="form-group form-check-inline">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="event_difficult" value="<?php echo $key ?>"
                <?php echo ( $key == $defaultDifficult ) ? 'checked="checked"' : ''; ?>>
                <?php echo $value ?>
              </label>
            </div>
            <?php } ?>
          </div>

          <!-- DATE DE l'EVENEMENT -->
          <div class="form-group col-3 center-newEvent padding-newEvent">
            <p><center>Date de l'événement</center></p>
            <input type="date" class="form-control" name="event_date" style="text-align:center;">
          </div>

          <!-- Heure de l'événement -->
          <div class="form-group col-3 center-newEvent padding-newEvent">
            <p><center>heure de l'événement</center></p>
            <input type="time" class="form-control" name="event_time" align="center">
          </div>

        </div>

        <div class="form-row col-12 padding-newEvent">
          <!-- DEROULEMENT -->
          <div class="col center-newEvent">
            <p>Déroulement de l'événement<br> Minimum 50 mots</p>
            <input type="text" id='count_word' name="count_word" value="0 Mots écrits" style="background: transparent; border: 0px; text-align:center;">
            <textarea class = "form-control col" name="event_instruction" onkeyup="countWord(this.form.event_instruction.value, this.form)" style="min-height:125px;"></textarea>
          </div>
        </div>

        <div class="form-row col-12 padding-newEvent">
          <p class="center-newEvent">Adresse de l'événement</p>
        </div>
        <div class="form-row col-12 padding-newEvent">
          <!-- LOCALISATION -->
          <div class="col-2 center-newEvent">
            <p>N°</p>
            <input class ="col form-control"
                    name="event_nb_street"
                    type="number">
          </div>

          <div class="col-4 center-newEvent">
            <p>Adresse</p>
            <input class = "col form-control"
                    name="event_street"
                    placeholder="Adresse">
          </div>

          <div class="col-2 center-newEvent">
            <p>Code Postale</p>
            <input class ="col form-control"
                    name="event_zip_code"
                    type="number">
          </div>

          <div class="col-3 center-newEvent">
            <p>Ville</p>
            <input class = "col form-control"
                    name="event_town"
                    placeholder="Ville">
          </div>
        </div>
        <div class="form-row col-12 padding-newEvent">
          <!-- Nb PARTICIPANT -->
          <div class="col-5 center-newEvent">
            <p>Nombre(s) de participant(s)</p>
            <input type="number" class = "form-control col" name="event_number_participant">
          </div>
        </div>

        <div class="form-group col-6 center-newEvent padding-newEvent">
          <input class="btn btn-primary" type="submit" value="Organiser mon événement !" id="btn-submit-newEvent" onclick="recupCountEvent()">
        </div>

      </form>

    </div>
  </div>
</div>
<?php include $path."footer.php" ?>
