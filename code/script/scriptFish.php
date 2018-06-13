<?php
	session_start();
	require "functions.php";
	require "conf.inc.php";


	if(count($_POST)==19){
		
		   if(is_numeric($_POST['inputthon']))
		&& if(is_numeric($_POST['inputsaumon']))
		&& if(is_numeric($_POST['inputcabillaud']))
		&& if(is_numeric($_POST['inputlotte']))
		&& if(is_numeric($_POST['inputmaquereau']))
		&& if(is_numeric($_POST['inputsardine']))
		&& if(is_numeric($_POST['inputcrevette']))
		&& if(is_numeric($_POST['inputbulot']))
		&& if(is_numeric($_POST['inputlangoustine']))
		&& if(is_numeric($_POST['inputsaintjacques']))
		&& if(is_numeric($_POST['inputhomard']))
		&& if(is_numeric($_POST['inputhuitre']))
		&& if(is_numeric($_POST['inputlangouste']))
		&& if(is_numeric($_POST['inputdorade']))
		&& if(is_numeric($_POST['inputbar']))
		&& if(is_numeric($_POST['inputraie']))
		&& if(is_numeric($_POST['inputpoulpe']))
		&& if(is_numeric($_POST['inputseche']))
		&& if(is_numeric($_POST['inputrequin']))
		{
			
		}else{
			
		}
	
}else{

	die("tentative de hack");
	
}