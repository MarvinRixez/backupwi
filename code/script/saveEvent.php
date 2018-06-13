<?php
  session_start();
  $path = $_SERVER['DOCUMENT_ROOT']."/wimf/code/";
  require_once $path."conf.inc.php";
  require $path."script/functions.php";

  if( !empty( $_POST[ "event_name" ] )
    && !empty( $_POST[ "event_theme" ] )
    && !empty( $_POST[ "event_difficult" ] )
    && !empty( $_POST[ "event_date" ] )
    && !empty( $_POST[ "event_instruction" ] )
    && is_numeric( $_POST[ "event_nb_street" ] )
    && is_numeric( $_POST[ "event_street" ] )
    && !empty( $_POST[ "event_time" ] )
    && !empty( $_POST[ "event_zip_code" ] )
    && !empty( $_POST[ "event_town" ] )
    && is_numeric( $_POST[ "event_number_participant" ] )
    && isset( $_POST[ 'count_word' ] )

  ){

    $error = false;
    $listOfErrors = [];

    // Nettoyage des chaînes
    $_POST[ "event_name" ] =  htmlspecialchars( ucfirst( strtolower( trim( $_POST[ "event_name" ] ) ) ) );
    $_POST[ "event_theme" ] = htmlspecialchars( ucfirst( strtolower( trim( $_POST[ "event_theme" ] ) ) ) );
    $_POST[ "event_instruction" ] = htmlspecialchars( $_POST[ "event_instruction" ] ) );
    $_POST[ "event_street" ] = htmlspecialchars( $_POST[ "event_street" ] ) );
    $_POST[ "event_town" ] = htmlspecialchars( $_POST[ "event_town" ] ) );

    // Recuperation du nombre mots dans instructions
    $split_count = str_split( $_POST[ "count_word" ], 3 );
    $nbWord = $split_count[ 0 ];

    // Nombre de mot minimum dans la description = 100
    if ( $nbWord < 50 ) {
      $error = true;
      $errorsOfForm[] = 0;
    }

    // Difficultée : soit 0,1,2
    if( !array_key_exists( $_POST[ "event_difficult" ], $listOfDifficult ) ){
      $error = true;
      $errorsOfForm[] = 1;
    }

    // nom de l'event : min 4 max 30
    if( strlen( $_POST[ "event_name" ] ) < 4 || strlen( $_POST[ "event_name" ] ) > 50 ){

      $error = true;
      $errorsOfForm[] = 4;
    }
    // thème : min 4 max 30
    if( strlen( $_POST[ "event_theme" ] ) < 4 || strlen( $_POST[ "event_theme" ] ) > 30 ){
      $error = true;
      $errorsOfForm[] = 5;
    }
    //Nombre de participant minimum : 2
    if ( $_POST[ "event_number_participant" ] < 2 ) {
      $error = true;
      $errorsOfForm[] = 6;
    }

    if(  strpos( $_POST[ "event_date" ] , "/")  ){
      list($day,$month,$year) = explode("/", $_POST["birthday"] );
      $dateFormat = true;
      }else if( strpos( $_POST[ "event_date" ] , "-")  ){
        list($year,$month,$day) = explode("-", $_POST["birthday"] );
        $dateFormat = true;
      }else{
        $error = true;
        $listOfErrors[] = 7;
      }

    if( $dateFormat ){
      
    }

    if( $error ){
      $_SESSION[ "errorsForm" ] = $errorsOfForm;
      $_SESSION[ "postForm" ] = $_POST;

      header("Location: /wimf/code/page/newEvent.php");
    }else{

      $connection = connectDB();

      // RECUPERATION DE L'ID DU USER
      $query_id_user = $connection->prepare( "SELECT user_id FROM users WHERE email = :smail" );
      $query_id_user->execute([
                "smail" => $_SESSION[ "email" ]
              ]);
      $user_id = $query_id_user->fetch(PDO::FETCH_ASSOC);


      // INSERTION DE L'ADRESSE DE L'EVENT
      $query_loc = $connection->prepare( "INSERT INTO localisation ( numero,street,zipcode,city,country )
      VALUES ( :num,:stret,:zip,:twn,:coon )");
      $query_loc->execute([
                'num'=>$_POST[ 'event_nb_street' ],
                'stret'=>$_POST[ 'event_street' ],
                'zip'=>$_POST[ 'event_zip_code' ],
                'twn'=>$_POST[ 'event_town' ],
                'coon'=>0
              ]);

      //RECUPARATION DE L'ID DE L'ADRESSE DE L'EVENT
      $query_id_loc = $connection->prepare( "SELECT loc_id FROM localisation WHERE street = :stret" );
      $query_id_loc->execute([
                'stret'=>$_POST[ 'event_street' ]
              ]);
      $loc_id = $query_id_loc->fetch(PDO::FETCH_ASSOC);

      // INSERTION DE L'EVENT
      $query_event = $connection->prepare("INSERT INTO `event`(`name`, `date`, `description`,`localisation`, `organizer`, `theme`, `hour`, `difficult`,`nb_participant`)
        VALUES (:name,:dat,:descip,:local,:user,:the,:tyme,:diff,:par)");

      $query_event->execute([
        "name"  =>$_POST[ 'event_name' ],
        "dat"   =>$_POST[ 'event_date' ],
        "descip"=>$_POST[ 'event_instruction' ],
        "local" =>$loc_id[ 'loc_id' ],
        "user"  =>$user_id["user_id"],
        "the"   =>$_POST[ 'event_theme' ],
        "tyme"  =>$_POST["event_time"],
        "diff"  =>$_POST[ 'event_difficult' ],
        "par"   =>$_POST['event_number_participant']
      ]);



      header("Location: /wimf/index.php");

    }
} else{
  die("Tentative de Hack");
}
