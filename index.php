<?php 
  $path = $_SERVER['DOCUMENT_ROOT']."/wimf/code/";
  require_once $path."conf.inc.php";
  include $path."header.php";
?>
    <div class="container">
      <div class="row">
        <section class="chat">
          <link rel="stylesheet" href="/wimf/css/shootbox.css">
    <div class="messages">
     
    </div>
    <div class="user-inputs">
      <form action="/wimf/code/script/shootbox.php?task=write" method="POST">
        <input type="text" name="author" id="author" placeholder="Pseudo">
        <input type="text" id="content" name="content" placeholder="Tappez votre message ici !">
        <button type="submit">Envoyer !</button>
      </form>
    </div>
  </section>
  <script src="/wimf/code/script/shootbox.js"></script>
        <!-- Blog Entries Column -->
        <div class="col-md-8 post">
          <h1 class="my-4">A l'affiche !</h1>
          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">" Titre du poste "</h2>
              <h5>Description</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
              <a href="#" class="btn btn-primary">En savoir plus &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posté le 18/02/2018 par
              <a href="#">"Username"</a>
            </div>
          </div>
          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">" Titre du poste "</h2>
              <h5>Description</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
              <a href="#" class="btn btn-primary">En savoir plus &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posté le 05/01/2018 par
              <a href="#">"Username"</a>
            </div>
          </div>
          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">" Titre du poste "</h2>
              <h5>Description</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
              <a href="#" class="btn btn-primary">En savoir plus &rarr;</a>
            </div>
           <div class="card-footer text-muted">
              Posté le 24/12/2017 par
              <a href="#">"Username"</a>
            </div>
          </div>
          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Précedent</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Suivant &rarr;</a>
            </li>
          </ul>

        </div>
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4 pos">
          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header bg-ciel">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Féstifs</a>
                    </li>
                    <li>
                      <a href="#">Entre amis</a>
                    </li>
                    <li>
                      <a href="#">Rapide</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Création</a>
                    </li>
                    <li>
                      <a href="#">Farfelu</a>
                    </li>
                    <li>
                      <a href="#">Apéro</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header bg-ciel">Composition rapide</h5>
            <div class="card-body">
              <input class="checkbox" type="checkbox">"Ingrédient"
              <input class="checkbox" type="checkbox">"Ingrédient"
              <input class="checkbox" type="checkbox">"Ingrédient"
              <input class="checkbox" type="checkbox">"Ingrédient"
              <input class="checkbox" type="checkbox">"Ingrédient"
              <input class="checkbox" type="checkbox">"Ingrédient"
              <input class="checkbox" type="checkbox">"Ingrédient"
              <input class="checkbox" type="checkbox">"Ingrédient"
              <input class="checkbox" type="checkbox">"Ingrédient"
               <span class="input-group-btn">
                  <button id="search" class="btn btn-secondary bg-dark" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php require $path."footer.php" ?>