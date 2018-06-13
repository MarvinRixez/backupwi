<?php
	session_start();
  	$path = $_SERVER['DOCUMENT_ROOT'].'/wimf/code/';
  	require_once $path.'conf.inc.php';
	require $path.'script/functions.php';

	if (count($_POST) == 2 && isset($_POST['email']) && isset($_POST['pwd'])) {
		$errorsLogin = [];
        $connection = connectDB();
        $query = $connection->prepare('SELECT user_id, password, permissions, username FROM users WHERE email = ?');
        $query->execute(array($_POST['email']));
        $result = $query->fetch();
        if ($result == FALSE)
            $errorsLogin[] = 1;
        else if (password_verify($_POST['pwd'], $result['password']) == FALSE)
            $errorsLogin[] = 2;
        else if ($result['permissions'] == 0)
            $errorsLogin[] = 3;
        if (!empty($errorsLogin))
            returnLoginErrors($errorsLogin);
        else
            $_SESSION['auth'] = true;
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['username'] = $result['username'];
            $_SESSION['token'] = bin2hex(random_bytes(64));
        header('Location: ../../index.php');
	}
	else {
		$errorsLogin[] = 0;
        returnLoginErrors($errorsLogin);
    }

function returnLoginErrors($errorsLogin) {
    $_SESSION['errorsLogin'] = $errorsLogin;
    header('Location: ../page/signup.php');
}