<?php
  $path = $_SERVER['DOCUMENT_ROOT']."/wimf/code/";
  require_once $path."conf.inc.php";
  require $path."script/functions.php";
  include $path."header.php";
?>

<div class="container">
  <div class="row">
    <div class="col-md-10 ">
      <form class="form-horizontal">
      <fieldset>
      <div class="form-group">
        <label class="col-md-4 control-label" for="Nom">Nom</label>
        <div class="col-md-4">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-user"></i>
            </div>
            <input id="Nom_user" name="Nom" type="text" placeholder="Nom" class="form-control input-md">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="Prénom">Prénom</label>
        <div class="col-md-4">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-user"></i>
            </div>
            <input id="Prénom_user" name="Prénom" type="text" placeholder="Prénom" class="form-control input-md">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="new_pic">Télécharger une photo</label>
        <div class="col-md-4">
          <input id="download_pic" name="new_pic" class="input-file" type="file">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label col-xs-12" for="Permanent Address">Adresse</label>
        <div class="col-md-2  col-xs-4">
          <input id="Adress_user" name="Adresse" type="text" placeholder="Rue" class="form-control input-md ">
        </div>
        <div class="col-md-2 col-xs-4">
          <input id="Adress_user" name="Adresse" type="text" placeholder="Ville" class="form-control input-md ">
        </div>
        <label class="col-md-4 control-label" for="Permanent Address"></label>
        <div class="col-md-2  col-xs-4">
          <input id="Adress_user" name="Adresse" type="text" placeholder="Code postale" class="form-control input-md ">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="Skills">Type de cuisine</label>
        <div class="col-md-4">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-graduation-cap"></i>
            </div>
            <input id="Skills" name="Skills" type="text" placeholder="Type de cuisine" class="form-control input-md">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="Phone number ">Numéro de téléphone</label>
          <div class="col-md-4">
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-phone"></i>
              </div>
              <input id="Phone number " name="Phone number " type="text" placeholder="Téléphone principal" class="form-control input-md">
            </div>
            <div class="input-group othertop">
              <div class="input-group-addon">
                <i class="fa fa-mobile fa-1x" style="font-size: 20px;"></i>
              </div>
              <input id="Phone number " name="Secondary Phone number " type="text" placeholder="Autre téléphone" class="form-control input-md">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="Email Address">Adresse mail</label>
          <div class="col-md-4">
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-envelope-o"></i>
              </div>
              <input id="Email Address" name="Email Address" type="text" placeholder="Adresse mail" class="form-control input-md">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="Overview (max 200 words)">Desciption</label>
          <div class="col-md-4">
            <textarea class="form-control" rows="10"  id="Overview (max 200 words)" name="Overview" placeholder="Votre description ..."></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" ></label>
          <div class="col-md-4">
            <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Submit</a>
            <a href="#" class="btn btn-danger" value=""><span class="glyphicon glyphicon-remove-sign"></span> Clear</a>
          </div>
        </div>
      </fieldset>
      </form>
    </div>
    <div class="col-md-2 hidden-xs">
      <img src="http://websamplenow.com/30/userprofile/images/avatar.jpg" class="img-responsive img-thumbnail ">
    </div>
  </div>
</div>

<script src="/vendor/jquery/jquery.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<?php
  include $path."footer.php"
?>
