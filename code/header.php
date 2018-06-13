<?php 
  $path = $_SERVER['DOCUMENT_ROOT']."/wimf/code/";
  require_once $path."conf.inc.php";
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Site de recette de cuisine !">
    <meta name="author" content="WIMFTeam">
    <?php include $path."fav.php" ?>
    <link href="/wimf/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/wimf/css/style.css" rel="stylesheet">
    <script src="/wimf/vendor/jquery/jquery.js"></script>
    <script src="/wimf/vendor/bootstrap/js/bootstrap.js"></script>
	 <title>What's in my fridge ?</title>
  </head>
  <body>
    <?php include $path."/page/navbar.php" ?>    