<?php
	session_start();
  $path = $_SERVER['DOCUMENT_ROOT']."/wimf/code/";
	require $path."script/functions.php";
	include $path."header.php";
?>
<script src="/wimf/js/signup.js"></script>
<link href="/wimf/css/signup.css" rel="stylesheet">
  <div class="row rowsignup">
    <div class="col-md-4 ml-auto">
      <div class="sl-box" id="signup-box">
        <h2 align="center">S'inscrire</h2>
          <?php
            if (isset($_SESSION["errorsSignup"])) {
              echo "<div class=\"error-box\">";
              foreach ($_SESSION["errorsSignup"] as $keyError)
                echo "<li style='color:red'>".$errorsSignup[$keyError]."</li>";
              unset($_SESSION["errorsSignup"]);
              echo"</div><br>";
              }
         	  if (isset($_SESSION["saveUser"])) {
              	echo "<div class=\"pass-box\">";
                echo "<li style='color:green'>".$_SESSION["saveUser"]."</li>";
              	unset($_SESSION["saveUser"]);
              	echo"</div><br>";
              }
          ?>
        <form method="POST" action="/wimf/code/script/saveUser.php" ><!--onsubmit="return validate_signup()"-->
          <!-- GENRE -->
          <?php foreach ($listOfGender as $key => $value) { ?>
            <div class="form-check form-check-inline">
              <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="gender" value="<?php echo $key ?>"            
                    <?php echo ($key == $defaultGender) ? 'checked="checked"' : ''; ?> 
                    > <!-- DEFAULTCHECK GENRE -->
                  <?php echo $value ?> <!-- AFFICHE GENRE -->
              </label>
            </div>
          <?php } ?>
          <div class="form-row">
            <!-- PRENOM -->
            <div class=" form-group col">
              <input id="firstname" type="text" class="form-control" placeholder="* Prénom" name="firstname" required="required" value="<?php if(isset($_SESSION['firstname'])) { echo $_SESSION['firstname']; } ?>">
              <p id="err-firstname" class="error-text"></p>
            </div>
            <!-- NOM -->
            <div class="form-group col">
              <input id="lastname" type="text" class="form-control" placeholder="* Nom" name="lastname" required="required" value="<?php if(isset($_SESSION['lastname'])) { echo $_SESSION['lastname']; } ?>">
              <p id="err-lastname" class="error-text"></p>
            </div>
          </div>
          <div class="form-row">
            <!-- PSEUDO -->
            <div class=" form-group col">
              <input id="username" type="text" class="form-control" placeholder="* Pseudo" name="username" required="required" value="<?php if(isset($_SESSION['username'])) { echo $_SESSION['username']; } ?>">
              <p id="err-username" class="error-text"></p>
            </div>
            <!-- DATE NAISSANCE -->
            <div class="form-group col">
              <input id="birthday" type="date" class="form-control" placeholder="* Date de naissance" name="birthday" required="required" value="<?php if(isset($_SESSION['birthday'])) { echo $_SESSION['birthday']; } ?>">
              <p id="err-birthday" class="error-text"></p>
            </div>
          </div>
          <div class="form-row">
            <!-- NUMERO -->
            <div class="form-group col-2">
              <input id="number" type="text" class="form-control" placeholder="N°" name="number">
              <p id="err-number" class="error-text"></p>
            </div>
            <!-- ADRESSE -->
            <div class="form-group col">
              <input id="address" type="text" class="form-control" placeholder="Adresse" name="address">
              <p id="err-address" class="error-text"></p>
            </div>
            <!-- CODE POSTAL -->
            <div class="form-group col-3">
              <input id="zipcode" type="text" class="form-control" placeholder="Code Postal" name="zipcode">
              <p id="err-zipcode" class="error-text"></p>
            </div>
          </div>
            <!-- VILLE -->
          <div class="form-row">
            <div class="form-group col">
              <input id="city" type="text" class="form-control" placeholder="Ville" name="city">
              <p id="err-city" class="error-text"></p>
            </div>
          <!-- PAYS -->
            <div class="form-group col">
              <select id="country" class="form-control" name="country" required="required">
                <option value="" selected disabled hidden>* Pays</option>
                <?php foreach ($listOfCountry as $key => $value) { ?>
                  <option value="<?php echo $key ?>">
                    <?php echo $value ?><!-- AFFICHE PAYS -->
                  </option>
                <?php } ?>
              </select>
              <p id="err-country" class="error-text"></p>
            </div>
          </div>
            <!-- EMAIL -->
            <div class="form-group">
              <input id="email" type="email" class="form-control" id="emailSignup" placeholder="* Email valide"
              name="email" required="required" value="<?php if (isset($_SESSION['email'])) { echo $_SESSION['email'];} ?>">
              <p id="err-email" class="error-text"></p>
            </div>
            <!-- MOT DE PASSE -->
            <div class="form-group">
              <input id="pwd" type="password" class="form-control" placeholder="* Mot de passe" name="pwd" required="required" 
              value="<?php if (isset($_SESSION['pwd'])) { echo $_SESSION['pwd'];} ?>">
              <p id="err-pwd" class="error-text"></p>
            </div>
            <!-- COMFIRMATION MOT DE PASSE -->
            <div class="form-group">
              <input id="pwd2" type="password" class="form-control" placeholder="* Confirmation" name="pwdConfirm" required="required"
              value="<?php if (isset($_SESSION['pwdConfirm'])) { echo $_SESSION['pwdConfirm'];} ?>">
              <p id="err-pwd2" class="error-text"></p>
            </div>
            <!-- CAPTCHA 
            <div class="form-group" id="captcha-box">
              <img id="captcha-img" src="/wimf/code/script/captcha.php"><br>
            </div>
            <div class="form-group">
              <input id="captacha" type="text" class="form-control" placeholder="* Complétez l'image au dessus" name="captcha" >
              <p id="err-captcha" class="error-text"></p>
            </div>-->
            <!-- CGU -->
            <div class="form-check">
              <input id="cgu" type="checkbox" class="form-check-input" name="cgu" >
              <label class="form-check-label">* J'accepte les <a id="CGU" href="/wimf/code/page/cgu.php">CGU</a> de ce site.</label>
              <p id="err-cgu" class="error-text"></p>
            </div><br>
            <div class="form-row">
              <div class="form-group col">
                <button type="submit" class="btn btn-primary">Inscription</button>
              </div>
              <div class="form-group col-3">
                <label id="required-fields">Les champs avec * sont requis</label>
              </div>
            </div>
        </form>
      </div>
    </div>
    <!-- CONNEXION -->
    <div class="col-md-4 mr-auto">
      <div class="sl-box" id="login-box">
        <h2 align="center">Se connecter</h2>
        <!-- AFFICHAGE D'ERREUR -->
        <?php
            if (isset($_SESSION["errorsLogin"])) {
                echo "<div class=\"error-box\">";
                foreach ($_SESSION["errorsLogin"] as $keyError)
                  echo "<li style='color:red'>".$errorsLogin[$keyError]."</li>";
                unset($_SESSION["errorsLogin"]);
                echo"</div>";
            }
        ?>
        <br>
        <form method="POST" action="/wimf/code/script/login.php" onsubmit="return validate_login()">
          <div class="form-group">
            <input id="email-login" type="email" class="form-control" aria-describedby="emailHelp" name="email" placeholder="Votre email" required="required">
            <p id="err-emailLogin" class="error-text"></p>
          </div>
          <div class="form-group">
            <input id="pwd-login" type="password" class="form-control" name="pwd" placeholder="Mot de passe" required="required">
            <p id="err-pwdLogin" class="error-text"></p>
          </div>
          <div class="form-row">
            <div class="form-group col">
              <button type="submit" class="btn btn-primary">Connexion</button>
            </div>
            <div class="form-group col-3">
              <a href="#" id="forgot-pwd">Mot de passe oublié ?</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php include $path."/footer.php" ?>