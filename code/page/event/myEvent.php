<?php
  session_start();
  $path = $_SERVER['DOCUMENT_ROOT']."/wimf/code/";
  require_once $path."script/functions.php";
  include $path."header.php";

  $connection = connectDB();
  $query = $connection->prepare( "SELECT `name`, `date`, `description`, `localisation`, `organizer`, `theme`, `hour`,`difficult`,`nb_participant` FROM event WHERE event_id =:eid" );
  $query->execute([
      "eid" => $_GET['id'],
    ]);
  $info = $query->fetch( PDO::FETCH_ASSOC );

  $query_user = $connection->prepare( "SELECT username FROM users WHERE user_id = :uid" );
  $query_user->execute([
              "uid" =>$info[ 'organizer' ]
          ]);
  $organizer = $query_user->fetch(PDO::FETCH_ASSOC);

  $query_loc = $connection->prepare( "SELECT numero,street,zipcode,city FROM localisation WHERE loc_id = :lid" );
  $query_loc->execute([
              "lid" =>$info[ 'localisation' ]
          ]);
  $where = $query_loc->fetch(PDO::FETCH_ASSOC);

?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzXY_YxKN-SXhaGh8_5ZOjpd81REbjSqc&sensor=true&language=fr"></script>
<script src = "/wimf/code/script/addElement.js"></script>
<input id="adresse" value="<?php
                          echo $where[ 'numero' ]." ".$where[ 'street' ]
                        ?>" style="display:none">
<style>

body{
  padding-top:50px;
}

</style>

<div class="container" onload="findAddress()">
  <div class="row">
    <div class="main_container">

      <center>
        <a href="/wimf/index.php">Accueil/</a>
        <a href="/wimf/code/page/event/allEvent.php">Événement/</a>
        <a href="/wimf/all_recipe.php/">Requete sql recuperation nom de l'event</a>
        <h1> <?php echo $info[ 'name' ] ?> </h1>
        <h4><?php echo $info[ 'theme' ] ?></h4>
        <h5><?php echo "Date : ".$info[ 'date' ]." heure : ".$info[ 'hour' ] ?></h5>
        <h6>Auteur :</h6>
        <a href="users/"><?php echo $organizer['username'] ?></a>
      </center>
      <div class="col-8 locMap" id="map-canvas" style="float:right;height:300px;width:45%"></div>

      <div class="col-12 padding-Event" >
        <center>
          <p>
            <b>Adresse de l'événement :</b>
            <br>
            cliquez <a onclick="findAddress();">ici</a> pour voir l'adresse<br>
            <?php
              echo $where[ 'numero' ]." ".$where[ 'street' ]." ".$where[ 'zipcode' ]." ".$where[ 'city' ];
            ?>
          </p>
        </center>
      </div>

      <div class="col-8 padding-Event" style="margin:auto" >
        <center>
          <p>
            <b>Déroulement de l'événement :</b>
            <br>
          </p>
          <p>
            <?php
              echo $info[ 'description' ];
            ?>
          </p>
        </center>
      </div>

      <div class="col-12 padding-Event" >
        <center>
          <p>
            <b>nombre de participant :</b>
            <br>
            <?php
              echo $info[ 'nb_participant' ];
            ?>
          </p>
        </center>

        <div class="col-12 padding-Event" >
          <center>
            <button class="btn btn-primary btn-default" type="submit">S'y inscrire</button>
          </center>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  include $path."footer.php"
?>

</script>
