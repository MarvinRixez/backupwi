<?php
	session_start(); 
	require "../../conf.inc.php";
	require "../../script/functions.php";
	include "../../header.php";
	
	?>


<form method="POST" action="../../script/scriptMeat.php">
	<div class="container" >
		<div class="form row">
			<div class="col-md-12 post">
						<center><h2 style="padding-top: 50px;">Boeuf</h2></center>
			</div>
			<?php if(isset($_SESSION['error'])){
				echo "<div style='color:red'>rentrez des données numériques</div>";
			} 
			unset($_SESSION['error']); ?>
			<div class="col-md-12 post img_aliments" id="boeuf">
			</div>
			<div class="col-md-12 padding-bot-20">*Quantités en gramme</div>
				<div class="col-lg-2">
					<div class="form-group">
		    			<label for="inputsteak">Steak</label>
		    			<input type="text" class="form-control" name="inputsteak" 
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-2">
		  			<div class="form-group">
		    			<label for="inputfilet">Filet Mignon</label>
		    			<input type="text" class="form-control" name="inputfilet" 
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-2">
					<div class="form-group">
		    			<label for="inputviandehachee">Viande Hachée</label>
		    			<input type="text" class="form-control" name="inputviandehachee" 
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-2">
		  			<div class="form-group">
		    			<label for="inputlangue">Langue</label>
		    			<input type="text" class="form-control" name="inputlangue"
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-2">
					<div class="form-group">
		    			<label for="inputpoitrine">Poitrine</label>
		    			<input type="text" class="form-control" name="inputpoitrine" 
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-2">
		  			<div class="form-group">
		    			<label for="inputentrecote">Entrecôte</label>
		    			<input type="text" class="form-control" name="inputentrecote" 
		    			value="0">
		  			</div>
		  		</div>
		</div>
	</div>

	<div class="container" >
		<div class="form row">
			<div class="col-md-12 post">
						<center><h2 style="padding-top: 50px;">Poulet</h2></center>
			</div>
			<div class="col-md-12 post img_aliments" id="poulet">
			</div>
			<div class="col-md-12 padding-bot-20">*Quantités en gramme</div>
				<div class="col-lg-3">
					<div class="form-group">
		    			<label for="inputaile">Aile</label>
		    			<input type="text" class="form-control" name="inputaile" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputcuisse">Cuisse</label>
		    			<input type="text" class="form-control" name="inputcuisse" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
					<div class="form-group">
		    			<label for="inputblanc">Blanc de poulet</label>
		    			<input type="text" class="form-control" name="inputblanc" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputpouletentier">Poulet entier</label>
		    			<input type="text" class="form-control" name="inputpouletentier" value="0">
		  			</div>
		  		</div>
		</div>
	</div>
	<div class="container" >
		<div class="form row">
			<div class="col-md-12 post">
						<center><h2 style="padding-top: 50px;">Porc</h2></center>
			</div>
			<div class="col-md-12 post img_aliments" id="porc">
			</div>
			<div class="col-md-12 padding-bot-20">*Quantités en gramme</div>
				<div class="col-lg-2">
					<div class="form-group">
		    			<label for="inputcoteporc">Côte</label>
		    			<input type="text" class="form-control" name="inputcoteporc" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-2">
		  			<div class="form-group">
		    			<label for="inputsaucisson">Saucisson</label>
		    			<input type="text" class="form-control" name="inputsaucisson" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-2">
					<div class="form-group">
		    			<label for="inputjambonblanc">Jambon Blanc</label>
		    			<input type="text" class="form-control" name="inputjambonblanc" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-2">
		  			<div class="form-group">
		    			<label for="inputsaucisse">Saucisses</label>
		    			<input type="text" class="form-control" name="inputsaucisse" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-2">
					<div class="form-group">
		    			<label for="inputandouillette">Andouillettes</label>
		    			<input type="text" class="form-control" name="inputandouillette" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-2">
		  			<div class="form-group">
		    			<label for="inputboudinnoir">Boudin Noir</label>
		    			<input type="text" class="form-control" name="inputboudinnoir" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-4">
		  			<div class="form-group">
		    			<label for="inputboudinblanc">Boudin Blanc</label>
		    			<input type="text" class="form-control" name="inputboudinblanc" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-4">
		  			<div class="form-group">
		    			<label for="inputtrippe">Trippes</label>
		    			<input type="text" class="form-control" name="inputtrippe" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-4">
		  			<div class="form-group">
		    			<label for="inputlardons">Lardons</label>
		    			<input type="text" class="form-control" name="inputlardon" value="0">
		  			</div>
		  		</div>
		</div>
	</div>

	<div class="form row">
		<div class="container padding-bot-20">
			<center>
				<button type="submit" class="btn btn-primary">Terminer</button>
			</center>
		</div>
	</div>
</form>

<?php include "../../footer.php"; ?>