<?php
  $path = $_SERVER['DOCUMENT_ROOT']."/wimf/code/";
  include $path."header.php";
  //include "scriptAccount.php";
?>

<div class="container-fluid" id="body-container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card div_account" style="width:100%">
          <img class="card-img-top" src="http://via.placeholder.com/300x200" alt="Card image"  style="width:100%" id="img_account">
          <div class="card-body">
            <h4 class="card-title"><?php echo $result[0]; ?></h4>
            <ul class="list-inline" id="courses">
            <div class="address">
              <ul class="w3-ul w3-small">
                <li>
                    <i class="fa" aria-hidden="true"><?php echo $result[1].$result[2]; ?></i>
                </li>
                <li>
                    <i class="fa" aria-hidden="true"><?php echo $result[3]; ?></i>
                </li>
                <li>
                    <i class="fa" aria-hidden="true"><?php echo $result[4]; ?> </i>
                </li>
                <li>
                    <i class="fa" aria-hidden="true"> <?php echo $result[5]; ?> </i>
                </li>
                <li>
                    <i class="fa" aria-hidden="true">
                      <?php if($result[6] == 0){echo "<p style='color: red;''>votre email n'est pas validé</p>";}else{echo $result[6];} ?> </i>
                </li>
              </ul>
            </div>
              <ul class="w3-ul w3-small">
                  <p>Talent culinaire</p>
                  <li>
                      <a href="" > " Talent_1 " </a>
                  </li>
                  <li>
                      <a href="">" Talent_2 "</a>
                  </li>
                  <li>
                      <a href="">" Talent_3 "</a>
                  </li>
              </ul>
            <hr>
            <p class="lower-case">  " Commentaire(s) laissé(s) sur une/des recette(s) "</p>
            <div class="ratings">
                <ul class="list-inline">
                    <li class="list-inline-item selected">
                        <i class="fa fa-star"></i>
                    </li>
                    <li class="list-inline-item selected">
                        <i class="fa fa-star"></i>
                    </li>
                    <li class="list-inline-item selected">
                        <i class="fa fa-star"></i>
                    </li>
                    <li class="list-inline-item selected">
                        <i class="fa fa-star"></i>
                    </li>
                    <li class="list-inline-item selected">
                        <i class="fa fa-star"></i>
                    </li>
                </ul>
              </div>
              <hr>
              <p><a href="newInfo.php" type="button"> <i class="fa fa-comment-o fa-lg">Modifiez le profil</i> </a></p>
            </div>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="card div_account" id="div_comment_account">

        </div>
      </div>
      <div class="col-lg-3">
        <div class="card div_account" >
          <center>
            Mes favoris
          </center>
          <ul class="list-block">
              <li class="list-block-item selected">
                  <i class="fa fa-star">Favoris_1</i>
              </li>
              <li class="list-block-item selected">
                  <i class="fa fa-star">Favoris_2</i>
              </li>
              <li class="list-block-item selected">
                  <i class="fa fa-star">Favoris_3</i>
              </li>
              <li class="list-block-item selected">
                  <i class="fa fa-star">Favoris_4</i>
              </li>
              <li class="list-block-item selected">
                  <i class="fa fa-star">Favoris_5</i>
              </li>
          </ul>
          <center>
            <a href="#">Voir plus -></a>
          </center>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid" id="footer-container-fluid">
    <div class="container">

    </div>
  </div>
</div>
<?php
  include $path."footer.php"
?>
