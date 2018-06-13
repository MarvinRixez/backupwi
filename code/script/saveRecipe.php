<?php
  session_start();
  $path = $_SERVER['DOCUMENT_ROOT']."/wimf/code/";
  require_once $path."conf.inc.php";
  require $path."script/functions.php";

  if( !empty( $_POST[ "recipe_name" ] )
    && !empty( $_POST[ "recipe_time" ] )
    && !empty( $_POST[ "recipe_baking" ] )
    && !empty( $_POST[ "recipe_total_time" ] )
    && !empty( $_POST[ "ingField_1" ] )
    && !empty( $_POST[ "recipe_instruction" ] )
    && isset( $_POST[ "recipe_difficult" ] )
    && isset( $_POST[ "img" ] )
  ){







    $error = false;
    $listOfErrors = [];

    // Nettoyage des chaînes
    $_POST[ "recipe_name" ] = htmlspecialchars( ucfirst( strtolower( trim( $_POST[ "recipe_name" ] ) ) ) );
    $_POST[ "recipe_instruction" ] = htmlspecialchars( $_POST[ "recipe_instruction" ] );

    // Recuperation du nombre mots dans instructions
    $split_count = str_split( $_POST[ "count_word" ], 3 );
    $nbWord = $split_count[ 0 ];

    // Nombre de mot minimum dans la description = 100
    if ( $nbWord < 100 ) {
      $error = true;
      $errorOfForm[] = 0;
    }

    // Difficultée : soit 0,1,2
    if( !array_key_exists( $_POST[ "recipe_difficult" ], $listOfDifficult ) ){
      $error = true;
      $errorOfForm[] = 1;
    }

    // nom de recette : min 4 max 30
    if( strlen( $_POST[ "recipe_name" ] ) < 4 || strlen( $_POST[ "recipe_name" ] ) > 30 ){

      $error = true;
      $errorOfForm[] = 2;
    }

    if ( $_POST[ "recipe_kcal" ] < 0) {
      $error = true;
      $errorOfForm[] = 3;
    }

    if( $error ){
      $_SESSION[ "errorsForm" ] = $errorOfForm;
      $_SESSION[ "postForm" ] = $_POST;

      header("Location: /wimf/code/page/newRecipe.php?succes=error");
    }else{

      $connection = connectDB();

      // INSERTION DE(s) L'IMAGE DE LA RECETTE
      $query_img = $connection->prepare("INSERT INTO picture ( thumbnail,picture ) VALUES ( :mimg,:pimg )");
      $query_img->execute([
                "mimg" => "img/recipe/minrec/".$_POST[ "img" ],
                "pimg" => "img/recipe/".$_POST[ "img" ]
              ]);
      var_dump($_POST['img']);

      // RECUPERATION DE L'ID DE L'IMAGE
      $query_id_img = $connection->prepare("SELECT img_id FROM picture WHERE img_image = :img");
      $query_id_img->execute([
                "img" => "img/recette/".$_POST[ "img" ]
              ]);
      $img_id = $query_id_img->fetch(PDO::FETCH_ASSOC);

      // RECUPERATION DE L'ID DU USER
      $query_id_user = $connection->prepare( "SELECT user_id FROM users WHERE email = :smail" );
      $query_id_user->execute([
                "smail" => $_SESSION[ "email" ]
              ]);
      $user_id = $query_id_user->fetch(PDO::FETCH_ASSOC);

      // INSERTION DE LA RECETTE
      $query_recipe = $connection->prepare( "INSERT INTO `recipe`(`name`, `difficulty`, `duration`, `preparation`, `baking`, `author`,`picture`, `instruction`, `kcal`)
        VALUES ( :name, :diff, :tyme, :prep, :cuis, :redac, :illu, :instruc, :kcal )  " );
      $query_recipe->execute([
                "name"=>$_POST[ "recipe_name" ],
                "diff"=>$_POST[ "recipe_difficult" ],
                "tyme"=>$_POST[ "recipe_time" ],
                "prep"=>$_POST[ "recipe_total_time" ],
                "cuis"=>$_POST[ "recipe_baking" ],
                "redac"=>$user_id[ 'user_id' ],
                'illu'=>$img_id[ 'img_id' ],
                "instruc"=>$_POST[ "recipe_instruction" ],
                "kcal"=>$_POST[ "recipe_kcal" ]
              ]);
      //BOUCLE INSERTIONS SQL
      for ($i = 1; $i < $_POST[ 'ing_c' ]; $i++) {

        // RECUPERATION DE L'ID DE LA RECETTE
        $query_recipe_id = $connection->prepare( "SELECT rec_id FROM recipe WHERE name = :name_id");
        $query_recipe_id->execute([
                    "name_id" => $_POST[ "recipe_name" ],
                ]);
        $recipe_id = $query_recipe_id->fetch(PDO::FETCH_ASSOC);

        // RECUPERATION DE(S) L'ID DU/DES INGREDIENT(s)
        $query_ing_id = $connection->prepare( "SELECT ing_id FROM ingredient WHERE ing_ingredient = :ing_recipe");
        $query_ing_id->execute([
                    "ing_recipe" => $_POST[ "ingField_".$i ],
                ]);
        $ing_id = $query_ing_id->fetch(PDO::FETCH_ASSOC);

        // RECUPERATION DU POIDS / LA QUANTITE DU/DES INGREDIENT(s)
        $query_ing_pq = $connection->prepare( "SELECT pq FROM ingredient WHERE ing = :ing_recipe");
        $query_ing_pq->execute([
                    "ing_recipe" => $_POST[ "ingField_".$i ],
                ]);
        $ing_pq = $query_ing_pq->fetch(PDO::FETCH_ASSOC);

        // INSERTION DES ID RECETTE ET INGREDIENT DANS LA TABLE INTERMEDIAIRE  recipe_ing
        $query_recipe_ing = $connection->prepare( "INSERT INTO recipe_ing (recipe,ingredient,quantity) VALUES ( :rid, :iid, :ity )" );
        $ert = $query_recipe_ing->execute([
                    "rid" => $recipe_id[ 'rec_id'],
                    "iid" => $ing_id['ing_id'],
                    "ity" => $ing_pq['pq']
                ]);
      }

      header("Location: /wimf/index.php?succes=okr");
    }
}else{

  die("Tentative de Hack");
}
