<?php 
require "functions.php";

//recuperation pseudo + email 
$connection = connectDB();
$query = $connection -> prepare("SELECT user_id, email FROM users WHERE email =:toto");
$query -> execute(["toto"=>$_SESSION['email']]);
$result = $query->fetchAll();

//generation aléatoire de la clé 
$key = "";
for($i=0;$i<=11;$i++){
	$string = array(mt_rand(65,90), mt_rand(97,122), mt_rand(49,57));
	$lettre[$i] = chr($string[mt_rand(0,2)]);
	$key .=$lettre[$i];
}
//insertion clé en bdd
$query = $connection->prepare("INSERT INTO users(validatekey) VALUES (:toto)");
$query->execute(["toto"=>$key]);

//création du mail
$recipient = $result[1];
$subject = "validation de votre adresse mail";
$header = "FROM: validation@wimf.com";
$message = "Bonjour,
	Pour finaliser votre inscription, veuillez cliquer sur le lien ci-dessous : 

http://82.124.10.32/wimf/validation.php?id=".urlencode($result[0])."&key=".urlencode($key)."

______________________________________
Ceci est un mail automatique, merci de ne pas y repondre."

mail($result[1], $subject, $message, $header);





	
