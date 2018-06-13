<nav class="navbar navbar-logo navbar-expand-lg navbar-dark bg-ciel fixed-top border">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <li class="nav-item">
            <a href="/wimf/index.php" class="navbar-left"><img src="/wimf/img/logo/logo2_2200_300.png" width="200" height="30"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/wimf/index.php">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/wimf/code/page/food/all_recipes.php">Nos recettes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/wimf/code/page/event/allEvent.php">Événement</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/wimf/code/page/frigo.php">Mes courses</a>
          </li>
          <?php if ( isset( $_SESSION[ 'email' ] ) ){
            echo '<li class="nav-item">';
            echo '<a class="nav-link" href="/wimf/code/page/users/account.php">Mon compte</a>';
            echo '</li>';
            }else{
              echo '<li class="nav-item">';
              echo '<a class="nav-link" href="/wimf/code/page/signup.php">Inscription/Connexion</a>';
              echo '</li>';
            }
          ?>
          <li class="nav-item">
            <a class="nav-link" href="/wimf/code/page/paneladmin.php">Panel Admin</a>
          </li>
          <li>
            <input type="text" class="form-control" placeholder="Recherche">
          </li>
          <li>
            <span class="input-group-btn">
              <button class="btn btn-secondary bg-dark" type="button">Go!</button>
            </span>
          </li>
        </li>
      </ul>
    </div>
  </div>
</nav>
