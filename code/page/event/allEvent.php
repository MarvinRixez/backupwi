<?php
  $path = $_SERVER['DOCUMENT_ROOT']."/wimf/code/";
  require_once $path."conf.inc.php";
  require $path."script/functions.php";
  include $path."header.php";

  $connection = connectDB();

  $count_event = $connection->query( "SELECT count(*) as nb FROM event");
  $size = $count_event->fetch();



?>
<div class="col-md-12" id="Select">
  <center>
    <p>
      Vous voulez partager votre recette ?<br>
      Cliquez ici pour alimenter la communauté !
    </p>
    <a href="/wimf/code/page/event/newEvent.php" class="btn btn-primary">Ajouter mon événement !</a>
  </center>
  <center>
    <h1>Nos événements</h1>
  </center>
</div>
<div class="container col-12">
  <div class="container row" style="margin:auto">
<?php
  for ($i = 1; $i < $size[ 'nb' ] + 1; $i++) {
    $query_event = $connection->prepare( "SELECT event_id,
                                                  name,
                                                  date,
                                                  description,
                                                  localisation,
                                                  organizer,
                                                  theme,
                                                  difficult,
                                                  creation
                                                  FROM event WHERE event_id = :rid");
    $query_event->execute([
                "rid" => $i
            ]);
    $event = $query_event->fetch(PDO::FETCH_ASSOC);

    $query_user = $connection->prepare( "SELECT username FROM users WHERE user_id = :uid" );
    $query_user->execute([
                "uid" =>$event[ 'organizer' ]
            ]);
    $organizer = $query_user->fetch(PDO::FETCH_ASSOC);

    $date_creation = str_split( $event['creation'],10 );

?>

    <div class="card col-3" style="margin: 45px; display:inline;">
      <div class="card-body">
        <h2 class="card-title"></h2>
        <center>
          <h5><?php echo $event[ 'name' ] ?></h5>
          <h6><?php echo $event[ 'theme' ] ?></h6>
        </center>
        <p class="card-text" style="min-height:100px;min-width:100%;"></p>
        <center>
          <a href="/wimf/code/page/event/myEvent.php?id=<?php echo $i ?>" class="btn btn-primary">En savoir plus &rarr;</a>
        </center>
      </div>
      <div class="card-footer text-muted">
        Fait le <?php echo $date_creation[0] ?>
        à <?php echo $date_creation[1] ?>
          par <?php echo $organizer[ 'username' ] ?>
        <b></b>
      </div>
    </div>

<?php
}
?>
    </div>
  </div>
</div>
<?php
  include $path."footer.php"
?>
