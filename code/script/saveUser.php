<?php
	session_start();
  	$path = $_SERVER['DOCUMENT_ROOT'].'/wimf/code/';
  	require_once $path.'conf.inc.php';
	require $path.'script/functions.php';

	$errorsSignup = [];
	// VERIF CHAMPS OBLIGATOIRE
	if (count($_POST) == 14 //15 + captcha
		&& isset($_POST['gender'])
		&& !empty($_POST['firstname'])
		&& !empty($_POST['lastname'])
		&& !empty($_POST['username'])
		&& !empty($_POST['birthday'])
		&& !empty($_POST['country'])
		&& !empty($_POST['email'])
		&& !empty($_POST['pwd'])
		&& !empty($_POST['pwdConfirm'])
		//&& !empty($_POST['captcha'])
		&& !empty($_POST['cgu'])
	) {
		$dateFormat = false;
		$gender = $_POST['gender'];
		$firstname = htmlspecialchars(ucfirst(strtolower(trim($_POST['firstname']))));
		$lastname = htmlspecialchars(ucfirst(strtolower(trim($_POST['lastname']))));
		$username = htmlspecialchars($_POST['username']);
		$birthday = trim($_POST['birthday']);
		$number = htmlspecialchars($_POST['number']);
		$zipcode = htmlspecialchars($_POST['zipcode']);
		$address = htmlspecialchars($_POST['address']);
		$city = htmlspecialchars($_POST['city']);
		$country = $_POST['country'];
		$email = htmlspecialchars(strtolower(trim($_POST['email'])));
		$pwd = htmlspecialchars($_POST['pwd']);
		$pwdConfirm = htmlspecialchars($_POST['pwdConfirm']);
		//$captcha = strtolower(trim($_POST['captcha']));
		$cgu = $_POST['cgu'];
		// REGEX MOT DE PASSE
		$containsUpper = preg_match('/[A-Z]/', $pwd);
		$containsLower = preg_match('/[a-z]/', $pwd);
		$containsDigit = preg_match('/\d/', $pwd);
		$containsSpecial = preg_match('/[^a-zA-Z\d]/', $pwd);
		$containsAll = $containsUpper && $containsLower && $containsDigit && $containsSpecial;
		// VERIF CHAMPS ADRESSE
		if (!empty($number) || !empty($zipcode) || !empty($address) || !empty($city)) {
			// NUMERO
			if (!is_numeric($number))
				$errorsSignup[] = 13;
			// ADRESSE
			if (strlen($address) < 5 || strlen($address) > 50)
				$errorsSignup[] = 14;
			// CODE POSTAL
			if (!is_numeric($zipcode) && strlen($zipcode) != 5)
				$errorsSignup[] = 15;
			// VILLE
			if (is_numeric($city) || strlen($city) < 2 || strlen($city) > 45)
				$errorsSignup[] = 16;
			// CHECK SI TOUT LES CHAMPS SONT RENSEIGNÉS
			if (empty($number) || empty($zipcode) || empty($address) || empty($city))
				$errorsSignup[] = 17;
		}
		// GENRE
		if (!array_key_exists($gender, $listOfGender))
			$errorsSignup[] = 1;
		// PRENOM (min=2, max=25)
		if (is_numeric($firstname) || strlen($firstname) < 2 || strlen($firstname) > 25)
			$errorsSignup[] = 2;
		// NOM (min=2, max=100)
		if (is_numeric($firstname) || strlen($lastname) < 2 || strlen($lastname) > 100)
			$errorsSignup[] = 3;
		// username (min=4, max=25)
		if (strlen($username) < 4 || strlen($username) > 25)
			$errorsSignup[] = 23;
		// EMAIL
		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
			$errorsSignup[] = 4;
		// DATE NAISSANCE
		if (strpos($birthday, '/')) {
			list($day, $month, $year) = explode('/', $birthday);
			$dateFormat = true;
		}
		else if (strpos($birthday, '-')) {
			list($year,$month,$day) = explode('-', $birthday);
			$dateFormat = true;
		}
		else
			$errorsSignup[] = 5;
		if ($dateFormat) { // ENTRE 18 ET 100 ANS
			if (is_numeric($month) && is_numeric($day) && is_numeric($year) && checkdate($month, $day, $year)) {
				$today = time();
				$time = 60 * 60 * 24 * 365;
				$birthday = mktime(0, 0, 0, $month, $day, $year);
				$time18 = $today - 18 * $time;
				$time100 = $today - 100 * $time;
				if ($birthday > $time18 || $birthday < $time100)
					$errorsSignup[] = 6;		}
			else
				$errorsSignup[] = 7;
		}		
		// PAYS
		if (!array_key_exists($country, $listOfCountry))
			$errorsSignup[] = 8;
		// MOT DE PASSE (min=8, max=24)
		if (strlen($pwd) < 8 || strlen($pwd) > 25)
			$errorsSignup[] = 9;
		// REGEX MOT DE PASSE
		if ($containsAll == FALSE)
			$errorsSignup[] = 18;
		// CONFIRMATION
		if ($pwd != $pwdConfirm)
			$errorsSignup[] = 10;
		// CAPTCHA
		//if ($captcha != $_SESSION['captcha'])
		//	$errorsSignup[] = 11;
		if ($cgu != 'on')
			$errorsSignup[] = 12;
		if (!empty($errorsSignup))
			returnSignupErrors($errorsSignup);
		else {
			echo '<h1>INSERTION</h1>';
			$connection = connectDB();
			$queryEmail = $connection->prepare('SELECT * FROM users WHERE email = ?');
			$queryusername = $connection->prepare('SELECT * FROM users WHERE username = ?');
			$queryEmail->execute(array($email));
			$queryusername->execute(array($username));
			$mailExist = $queryEmail->rowCount();
			$usernameExist = $queryusername->rowCount();
			if ($mailExist != 0)
				$errorsSignup[] = 21;
			if ($usernameExist != 0)
				$errorsSignup[] = 22;
			if (!empty($errorsSignup))
				returnSignupErrors($errorsSignup);
			else {
				echo 'OKAY INSERT';
				$birthday = date('Y-m-d', $birthday);
				$registration = date('Y-m-d H:i:s');
				$pwd = password_hash($pwd, PASSWORD_DEFAULT);
				$def_perms = 0;
				$def_avatar = NULL;
				if (empty($number) || empty($address) || empty($zipcode) || empty($city)) {
					$number = NULL;
					$address = NULL;
					$zipcode = NULL;
					$city = NULL;
					echo $number.' '.$address.' '.$zipcode.' '.$city;
				}
				$queryLoc = $connection->prepare('INSERT INTO localisation(number, street, zipcode, city, country) VALUES (?, ?, ?, ?, ?)');
				$queryLoc->execute(array($number, $address, $zipcode, $city, $country));
				$id_loc = $connection->lastInsertId();
				$queryUser = $connection->prepare('INSERT INTO users(email, password, registration, permissions, username, gender, firstname, lastname, birthday, localisation, avatar) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
				$queryUser->execute(array($email, $pwd, $registration, $def_perms, $username, $gender, $firstname, $lastname, $birthday, $id_loc, $def_avatar));
				if (!empty($errorsSignup)) {
					$errorsSignup[] = 0;
					returnSignupErrors($errorsSignup);
				}
				else
					returnSignupValid();
			}
		}
	}
	else {
		$errorsSignup[] = 0;
		returnSignupErrors($errorsSignup);
	}

function returnSignupErrors($errorsSignup) {
	$_SESSION['errorsSignup'] = $errorsSignup;
	header('Location: ../page/signup.php');
}

function returnSignupValid() {
	$_SESSION['saveUser'] = 'Votre compte a bien été créée. Merci de confirmer votre email pour activé votre compte.';
	header('Location: ../page/signup.php');
}