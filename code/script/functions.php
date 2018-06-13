<?php
$path = $_SERVER['DOCUMENT_ROOT']."/wimf/code/";
require_once $path."/conf.inc.php";

function connectDB()
{
	try
	{
		$connection = new PDO(DBDRIVER.":host=".DBHOST.";dbname=".DBNAME,DBUSER,DBPWD, [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			//PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		]);
	}
	catch(Exception $e)
	{
		die("Erreur SQL ".$e->getMessage());
	}
	return $connection;
}

function IsPrivate()
{
	if (!isConnected())
	{
		header("Loation: signup.php?url=".usrencode($_SERVER["REQUEST_URI"]));
	}
}
