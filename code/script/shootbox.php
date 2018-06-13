<?php
$path = $_SERVER['DOCUMENT_ROOT']."/wimf/code/";
require $path."conf.inc.php";
/**
 * Connexion simple à la base de données via PDO !
 */
$db = new PDO(DBDRIVER.":host=".DBHOST.";dbname=".DBNAME,DBUSER,DBPWD, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

/**
 * On doit analyser la demande faite via l'URL (GET) afin de déterminer si on souhaite récupérer les messages ou en écrire un
 */
$task = "list";

if(array_key_exists("task", $_GET)){
  $task = $_GET['task'];
}

if($task == "write"){
  postMessage();
} else {
  getMessages();
}

/**
 * Si on veut récupérer, il faut envoyer du JSON
 */
function getMessages(){
  global $db;

  // 1. On requête la base de données pour sortir les 20 derniers messages
  $resultats = $db->query("SELECT * FROM shootbox ORDER BY created_at DESC LIMIT 20");
  // 2. On traite les résultats
  $messages = $resultats->fetchAll();
  // 3. On affiche les données sous forme de JSON
  echo json_encode($messages);
}
/**
 * Si on veut écrire au contraire, il faut analyser les paramètres envoyés en POST et les sauver dans la base de données
 */
function postMessage(){
  global $db;
  // 1. Analyser les paramètres passés en POST (author, content)
  
  if(!array_key_exists('author', $_POST) || !array_key_exists('content', $_POST)){

    echo json_encode(["status" => "error", "message" => "One field or many have not been sent"]);
    return;

  }
  $_POST['author'] = htmlspecialchars($_POST['author']);
  $_POST['content'] = htmlspecialchars($_POST['content']);
  $author = $_POST['author'];
  $content = $_POST['content'];

  // 2. Créer une requête qui permettra d'insérer ces données
  $query = $db->prepare('INSERT INTO shootbox SET author = :author, content = :content, created_at = NOW()');

  $query->execute([
    "author" => $author,
    "content" => $content
  ]);

  // 3. Donner un statut de succes ou d'erreur au format JSON
  echo json_encode(["status" => "success"]);
}