function validate_login() {
  var email = document.getElementById('email-login');
  var pwd = document.getElementById('pwd-login');
  var err = 0;
  clearError(email);
  clearError(pwd);
  err += checkEmailLogin(email, err);
  err += checkPwdLogin(pwd, err);
  return err == 0;
}

function checkEmailLogin(email, err) {
	if (email.value.indexOf('@', [0]) == -1) {
  		printError(email, 'Il manque un @');
    	err++;
  	}
  	if (email.value.indexOf('.', [0]) == -1) {
  		printError(email, 'Il manque un . pour le domaine');
    	err++;
  	}
  return err;
}

function checkPwdLogin(pwd, err) {
    if (pwd.value.length === 0) {
    	printError(pwd, 'Renseignez votre mot de passe');
    	err++;
  	}
    if (pwd.value.length < 8) {
    	printError(pwd, '8 caractères minimum');
    	err++;
  	}
  return err;
}

function validate_signup() {
  var firstname = document.getElementById('firstname');
  var lastname = document.getElementById('lastname');
  var pseudo = document.getElementById('username');
  var birthday = document.getElementById('birthday');
  var number = document.getElementById('number');
  var address = document.getElementById('address');
  var zipcode = document.getElementById('zipcode');
  var city = document.getElementById('city');
  var country = document.getElementById('country');
  var email = document.getElementById('email');
  var pwd = document.getElementById('pwd');
  var pwd2 = document.getElementById('pwd2');
  var captcha = document.getElementById('captcha');
  var cgu = document.getElementById('cgu');
  var err = 0;
  clearError(firstname);
  clearError(lastname);
  clearError(pseudo);
  clearError(birthday);
  clearError(number);
  clearError(address);
  clearError(zipcode);
  clearError(city);
  clearError(country);
  clearError(email);
  clearError(pwd);
  clearError(pwd2);
  //clearError(captcha);
  clearError(cgu);
  err += checkFirstname(firstname, err);
  err += checkLastname(lastname, err);
  err += checkPseudo(pseudo, err);
  err += checkBirthday(birthday, err);
  err += checkAddress(number, address, zipcode, city, err);
  err += checkCountry(country, err);
  err += checkEmail(email, err);
  err += checkPwd(pwd, pwd2, err);
  //err += checkCaptcha(captcha, err);
  err += checkCgu(cgu, err);
  console.log(err);
  return err == 0;
}

function checkFirstname(firstname, err) {
	if (firstname.value.length === 0) {
		printError(firstname, 'Renseignez votre prénom');
    	err++;
  	}
  	else if (firstname.value.length < 2) {
		printError(firstname, 'Minimum 2 caractères');
    	err++;
  	}
  	else if (firstname.value.length > 25) {
		printError(firstname, 'Maximum 25 caractères');
    	err++;
  	}
	return err;
}

function checkLastname(lastname, err) {
	if (lastname.value.length === 0) {
    	printError(lastname, 'Renseignez votre nom');
    	err++;
  	}
  	else if (lastname.value.length < 2) {
		printError(lastname, 'Minimum 2 caractères');
    	err++;
  	}
  	else if (lastname.value.length > 100) {
		printError(lastname, 'Maximum 100 caractères');
    	err++;
  	}
  return err;
}

function checkPseudo(pseudo, err) {
	if (pseudo.value.length === 0) {
    	printError(pseudo, 'Renseignez votre pseudo');
    	err++;
  	}
  	else if (pseudo.value.length < 4) {
		printError(pseudo, 'Minimum 4 caractères');
    	err++;
  	}
  	else if (pseudo.value.length > 25) {
		printError(pseudo, 'Maximum 25 caractères');
    	err++;
  	}
  return err;
}

function checkBirthday(birthday, err) {
	if (birthday.value.length === 0) {
    	printError(birthday, 'Renseignez votre date de naissance');
    	err++;
  	}
}

function checkAddress(number, address, zipcode, city, err) {
	if (!number.value || !address.value || !zipcode.value || !city.value) {
		if (!number.value) {
    		printError(number, 'Renseignez votre numéro d\'addresse');
    		err++;
  		}
  		if (!address.value) {
    		printError(address, 'Renseignez votre addresse');
    		err++;
  		}
  		if (!zipcode.value) {
    		printError(zipcode, 'Renseignez votre code postal');
    		err++;
  		}
 		if (!city.value) {
    		printError(city, 'Renseignez votre ville');
    		err++;
  		}
  	}
  return err;
}

function checkCountry(country, err) {
	if (!email.value) {
    	printError(email, 'Renseigner votre pays');
    	err++;
  	}
  return err;
}

function checkEmail(email, err) {
	if (email.value.length === 0) {
    	printError(email, 'Renseignez votre email');
    	err++;
  	}
  return err;
}

function checkPwd(pwd, pwd2, err) {
	if (pwd.value.length === 0) {
    	printError(pwd, 'Renseignez votre mot de passe');
    	err++;
  	}
  	if (pwd.value != pwd2.value) {
    	printError(pwd2, 'Les mots de passe ne sont pas identiques');
    	err++;
  	}
  return err;
}

function checkCaptcha(captcha, err) {
	if (captcha.value.length === 0) {
    	printError(captcha, 'Renseignez le captcha');
    	err++;
  	}
  	return err;
}

function checkCgu(cgu, err) {
	if (cgu.value.length === 0) {
    	printError(cgu, 'Vous devez accepter les CGU');
    	err++;
  	}
  return err;
}

function clearError(input) {
  input.style.borderColor = '#BDBDBD';
  var div = input.parentNode;
  var p = div.getElementsByTagName('p')[0];
  p.innerHTML = '';
}

function printError(input, message) {
  input.style.borderColor = 'red';
  var div = input.parentNode;
  var p = div.getElementsByTagName('p')[0];
  p.innerHTML = message;
}