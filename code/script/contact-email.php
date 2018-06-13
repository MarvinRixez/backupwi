<?php
	session_start();
	$path = $_SERVER['DOCUMENT_ROOT']."/wimf/code/";
	require_once $path."/conf.inc.php";
	require $path."script/functions.php";
	include $path."header.php";

	$receiver = "apleney@myges.fr";
	$regex = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	$errorsContact = [];

	$email = $_POST['contact-email'];
	$title = $_POST['contact-title'];
	$message = $_POST['contact-message'];

	if (!isset($email) || !isset($title) || !isset($message))
		$errorsContact[] = 0;
	if (!preg_match($regex, $email))
		$errorsContact[] = 1;
	if (strlen($title) < 5 || strlen($title) > 30)
		$errorsContact[] = 2;
	if (strlen($message) < 10 || strlen($message) > 30)
		$errorsContact[] = 3;
	if (!empty($errorsContact)) {
			$_SESSION['errorsContact'] = $errorsContact;
			header('Location: ../page/contact.php');
	}
	else {
		mail($receiver, $title, $message, "From:".$email);
		$_SESSION['emailSend'] = "Email envoyé. Merci de nous avoir contacté !";
		header('Location: ../page/contact.php');
	}
?>