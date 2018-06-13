<?php
  //session_start();
  $path = $_SERVER['DOCUMENT_ROOT']."/wimf/code/";
  require_once $path."conf.inc.php";
  include $path."header.php";
?>
<div class="container">
      <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-12 post">
			<center>
   				<h1 class="my-4">Vos Courses !</h1>
			</center>
		</div>
	</div>
</div>
<div class="container" >
	<div class ="row">
		<div class="col-md-4 post">
			<center>
				<h2 class="my-4">Votre Frigo</h2>
			</center>
			<center>
			<a href="food/viande.php"><img src="/wimf/img/gastro/steak.png" border="0" width="100px" title="Viande"></a>
			<a href="food/poisson.php"><img src="/wimf/img/gastro/fish.png" border="0" width="100px" title="Poisson"></a>
			</center>
			<center>
				<a href="food/sauce.php"><img src="/wimf/img/gastro/mustard-2.png" border="0" width="100px" title="Sauces"></a>
				<a href="food/laitier.php"><img src="/wimf/img/gastro/milk.png" border="0" width="100px" title="Létages"></a>
			</center>
		</div>
		<div class="col-md-4 post">
			<center>
				<h2 class="my-4">Votre Cellier</h2>
			</center>
			<a href="food/legumes.php"><img src="/wimf/img/gastro/broccoli.png" border="0" width="100px" title="Légumes"></a>
			<a href="food/fruit.php"><img src="/wimf/img/gastro/strawberry.png" border="0" width="100px" title="Fruits"></a>
			<a href="food/feculents.php"><img src="/wimf/img/gastro/potatoes-2.png" border="0" width="100px" title="Féculents"></a>
			<center>
				<a href="food/cereales.php"><img src="/wimf/img/gastro/oat.png" border="0" width="100px" title="Cereales"></a>
				<a href="food/conserve.php"><img src="/wimf/img/gastro/can-2.png" border="0" width="100px" title="Conserves"></a>
			</center>
		</div>
		<div class="col-md-4 post">
			<center>
				<h2 class="my-4">Autres</h2>
			</center>
			<a href="food/epices.php"><img src="/wimf/img/gastro/chili.png" border="0" width="100px" title="Epices"></a>
			<a href="food/soft.php"><img src="/wimf/img/gastro/water.png" border="0" width="100px" title="Boissons non-alcoolisées"></a>
			<a href="food/alcool.php"><img src="/wimf/img/gastro/glass-6.png" border="0" width="100px" title="Boissons alcoolisées"></a>
			<center>
				<a href="food/autres.php"><img src="/wimf/img/gastro/groceries.png" border="0" width="100px" title="Autres"></a>
			</center>
		</div>
	</div>
<?php include $path."footer.php" ?>