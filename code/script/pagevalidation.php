<?php

require "functions.php";


$connection = connectDB();

//recuperation données du mail
$username = $_GET["id"];
$key = $_GET["key"];

//recuperation données bdd

$query = $connection->prepare("SELECT validatekey, permissions FROM users WHERE username= :toto");
$query->execute(["toto"=>$_GET["id"]]);
$result = $query->fetchAll();

//verification 

if($result[1] == 1){
	echo "votre compte est déjà validé";
}
else
{
	if($result[0] == $key){
		echo "votre compte a bien été activé";
		//changement de valeur de permissions


		$query = $connection->prepare("UPDATE users SET validatekey = "1" WHERE id= :toto");
		$query->execute("toto"=>$_GET["id"]);

	}else{
		echo "erreur votre compte ne peut être activé avec cette clé !";
	}
}