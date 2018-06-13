<?php
  session_start();
  $path = $_SERVER['DOCUMENT_ROOT']."/wimf/code/";
	require_once $path."conf.inc.php";
	require PATH."script/functions.php";
	include PATH."header.php";
?>
<link href="/wimf/css/signup.css" rel="stylesheet">
<div class="container">
 <div class="row rowsignup">
    <div class="col-md-6 ml-auto">
      <div class="sl-box" id="login-box">
        <h2 align="center">Contact</h2>
          <div class="form-row">
              <ul><br>
                <li>Téléphone : <i>06.07.08.09.10</i></li>
                <li>Email : <i>wimf@gmx.com</i></li>
                <li>Adresse : <i>242 Rue du Faubourg Saint-Antoine, 75012 Paris</i></li>
                <li>Fax: <i>01.02.03.04.05</i></li>
                <li>Minitel: <i>09.01.02.03.04</i></li>
              </ul>
          </div>
      </div>
    </div>
    <!-- CONNEXION -->
    <div class="col-md-5 mr-auto">
      <div class="sl-box" id="login-box">
        <h2 align="center">Nous écrire</h2>
        <!-- AFFICHAGE D'ERREUR -->
        <br>
        <?php
            if (isset($_SESSION["errorsContact"])) {
              echo "<div class=\"error-box\">";
              foreach ($_SESSION["errorsContact"] as $keyError)
                echo "<li style='color:red'>".$errorsContact[$keyError]."</li>";
              unset($_SESSION["errorsContact"]);
              echo"</div><br>";
            }
            if (isset($_SESSION["emailSend"])) {
                echo "<div class=\"pass-box\">";
                echo "<li style='color:green'>".$_SESSION["emailSend"]."</li>";
                unset($_SESSION["emailSend"]);
                echo"</div><br>";
            }
        ?>
        <!--<form method="POST" action="/wimf/code/script/contact-email.php">-->
          <div class="form-group">
            <input id="contact-email" type="email" class="form-control" name="contact-email" placeholder="Votre email">
          </div>
          <div class="form-group">
            <input id="contact-title" type="text" class="form-control"  name="contact-title" placeholder="Titre">
          </div>
          <div class="form-group">
            <textarea id="contact-message" name="contact-message" class="form-control" cols="44" rows="8" placeholder="Message..."></textarea>
          </div>
          <div class="form-group" align="center">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include $path."footer.php" ?>