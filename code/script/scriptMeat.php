<?php
	session_start();
	require "../functions.php";
	require "../conf.inc.php";


	if(count($_POST)==19){
		
		   if (is_numeric($_POST['inputsteak'])
		&& is_numeric($_POST['inputfilet'])
		&& is_numeric($_POST['inputviandehachee'])
		&& is_numeric($_POST['inputlangue'])
		&& is_numeric($_POST['inputpoitrine'])
		&& is_numeric($_POST['inputentrecote'])
		&& is_numeric($_POST['inputaile'])
		&& is_numeric($_POST['inputcuisse'])
		&& is_numeric($_POST['inputblanc'])
		&& is_numeric($_POST['inputpouletentier'])
		&& is_numeric($_POST['inputcoteporc'])
		&& is_numeric($_POST['inputsaucisson'])
		&& is_numeric($_POST['inputjambonblanc'])
		&& is_numeric($_POST['inputsaucisse'])
		&& is_numeric($_POST['inputandouillette'])
		&& is_numeric($_POST['inputboudinnoir'])
		&& is_numeric($_POST['inputboudinblanc'])
		&& is_numeric($_POST['inputtrippe'])
		&& is_numeric($_POST['inputlardon']))
		{
			$connection = connectDB();
                
                $query = $connection->prepare("SELECT user_id FROM user where user_pseudo =:toto");
                $query->execute([
                              "toto" => $_SESSION['pseudo']
                          ]);
                $iduser = $query;
                 
		}else{
			$_SESSION['error'] = 1;
		}
	
}else{

	die("tentative de hack");

}



