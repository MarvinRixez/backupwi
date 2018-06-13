<?php 
session_start();
$path = $_SERVER['DOCUMENT_ROOT']."/wimf/code/";
require_once "../../script/functions.php";


//recuperation username 
$connection = connectDB();
$query = $connexion->prepare("SELECT username, firstname, lastname, email, birthday, registration, permissions FROM users where email =:toto");
$query->execute(["toto" => $_SESSION['email']]);
$results = $query->fetchAll();









