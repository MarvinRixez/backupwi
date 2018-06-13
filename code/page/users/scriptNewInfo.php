<?php 
require "../../script/functions.php";

session_start();

if(count($_POST)==7
	    && !empty($_POST["firsname"])  
        && !empty($_POST["lastname"]) 
        && !empty($_POST["address1"]) 
        && !empty($_POST["address2"]) 
        && !empty($_POST["address3"]) 
        && !empty($_POST["address4"])
        && !empty($_POST["address5"]) 
         ){

	$error = false;
	$_POST["name"] = strtolower(trim($_POST["firstname"]));
    $_POST["firstname"] = strtoupper(trim($_POST["lastname"])) ;
    $_POST["email"] = strtolower(trim($_POST["email"])) ;

    if(!ctype_alpha($_POST["name"])){
    	$error = true;
    	echo "votre nom ne doit contenir que des caractéres alphabétiques";
    }
    if(!ctype_alpha($_POST["firstname"])){
    	$error = true;
    	echo "votre nom ne doit contenir que des caractéres alphabétiques";
    }
    if(!is_numeric($_POST["address1"])){
    	$error = true;
    	echo "votre numéro de rue ne doit contenir que des chiffres";
    }
    if(!ctype_alpha($_POST["address2"])){
    	$error = true;
    	echo "le nom de rue ne doit être composé que de caractéres alphabétiques";
    }
    if(!ctype_alpha($_POST["address3"])){
    	$error = true;
    	echo "le nom de la ville ne doit être composé que de caractéres alphabétiques ";
    }
    if(!is_numeric($_POST["address4"]) && strlen($_POST["address4"]) != 5){
    	$error = true;
    	echo "le code postal doit être composé de caractéres numériques et faire exactement 5 chiffres";
    }
    
    if($error){
    	header("Location: newinfo.php");
    }else{
    	//insertion base de données

    		$connection = connectDB();
    		$query = $connection -> prepare('UPDATE users, localisation SET 
    			users.firstname = "1", users.lastname = "2", 
    			localisation.number = "3", localisation.street = "4", 
    			localisation.city = "5",localisation.zipcode = "6", 
    			localisation.country = "7" WHERE users.email = "8"');

    		$query->execute(["1"=>$_POST["firstname"],
    						 "2"=>$_POST["lastname"],
    						 "3"=>$_POST["address1"],
    						 "4"=>$_POST["address2"],
    						 "5"=>$_POST["address3"],
    						 "6"=>$_POST["address4"],
    						 "7"=>$_POST["address5"],
    						 "8"=>$_SESSION['email']
							]);
    }
}else{
	header("Location: newinfo.php");
}



