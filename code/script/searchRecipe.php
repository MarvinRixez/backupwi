<?php
  $path = $_SERVER['DOCUMENT_ROOT']."/wimf/code/";
  require_once $path."conf.inc.php";
  require $path."script/functions.php";

  echo "okay";
  $calomin = $_POST['caloMin'];
  $calomax = $_POST['caloMax'];
  $errorsSearch = [];

$errorsSearch = [
  1=>"La valeur des calories doit etre comprise entre 100 et 2000kcal",
  2=>"Aucun résultat"
];

  if (!is_numeric($calomin) || $calomin <= 2000 || $calomin >= 100)
  	$errorsSearch = 1;
  if (!is_numeric($calomax) || $calomax <= 2000 || $calomax >= 100)
  	$errorsSearch = 1;
  	$connection = connectDB();
  	$query = $connection->prepare('SELECT * FROM recipe WHERE kcal BETWEEN ? AND ?');
  	$query->execute(array($calomin, $calomax));
	$result = $query->fetch();
	var_dump($result);
	if ($result == FALSE)
		$errorsSearch = 2;
	var_dump($errorsSearch);