<?php
	session_start(); 
	require "../../conf.inc.php";
	require "../../script/functions.php";
	include "../../header.php";
	
	?><?php include "../../footer.php"; ?>


<form method="POST" action="script/scriptMilk.php">
	<div class="container" >
		<div class="form row">
			<div class="col-md-12 post">
						<center><h2 style="padding-top: 50px;">La Base</h2></center>
			</div>
			<div class="col-md-12 post img_aliments" id="lait">
			</div>
			<div class="col-md-12 padding-bot-20">*Quantités en gramme ou mL</div>
				<div class="col-lg-2">
					<div class="form-group">
		    			<label for="inputlaitentier">Lait entier</label>
		    			<input type="text" class="form-control" id="inputlaitentier" 
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-2">
		  			<div class="form-group">
		    			<label for="inputbeurredoux">Beurre doux</label>
		    			<input type="text" class="form-control" id="inputbeurredoux" 
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-2">
					<div class="form-group">
		    			<label for="inputdemisel">Beurre demi-sel</label>
		    			<input type="text" class="form-control" id="inputdemisel" 
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-2">
		  			<div class="form-group">
		    			<label for="inputlaitecreme">Lait demi-ecrémé</label>
		    			<input type="text" class="form-control" id="inputlaitecreme"
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-2">
					<div class="form-group">
		    			<label for="inputcremeepaisse">Crème épaisse</label>
		    			<input type="text" class="form-control" id="inputcremeepaisse" 
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-2">
		  			<div class="form-group">
		    			<label for="inputcremeliquide">Crème liquide</label>
		    			<input type="text" class="form-control" id="inputcremeliquide" 
		    			value="0">
		  			</div>
		  		</div>
		</div>
	</div>

	<div class="container" >
		<div class="form row">
			<div class="col-md-12 post">
						<center><h2 style="padding-top: 50px;">Fromage</h2></center>
			</div>
			<div class="col-md-12 post img_aliments" id="fromage">
			</div>
			<div class="col-md-12 padding-bot-20">*Quantités en gramme</div>
				<div class="col-lg-3">
					<div class="form-group">
		    			<label for="inputcamembert">Camembert</label>
		    			<input type="text" class="form-control" id="inputcamembert" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputbrie">Brie</label>
		    			<input type="text" class="form-control" id="inputbrie" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
					<div class="form-group">
		    			<label for="inputroquefort">Roquefort</label>
		    			<input type="text" class="form-control" id="inputroquefort" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputtomme">Tomme</label>
		    			<input type="text" class="form-control" id="inputtomme" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-4">
		  			<div class="form-group">
		    			<label for="inputcomte">Comté</label>
		    			<input type="text" class="form-control" id="inputcomte" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-4">
		  			<div class="form-group">
		    			<label for="inputfromagefrais">Fromage Frais</label>
		    			<input type="text" class="form-control" id="inputfromagefrais" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-4">
		  			<div class="form-group">
		    			<label for="inputmozzarella">Mozzarella</label>
		    			<input type="text" class="form-control" id="inputmozzarella" value="0">
		  			</div>
		  		</div>
		</div>
	</div>
	<div class="container" >
		<div class="form row">
			<div class="col-md-12 post">
						<center><h2 style="padding-top: 50px;">Les Dérivés</h2></center>
			</div>
			<div class="col-md-12 post img_aliments" id="yogurt">
			</div>
			<div class="col-md-12 padding-bot-20">*Quantités en gramme ou mL</div>
				<div class="col-lg-3">
					<div class="form-group">
		    			<label for="inputyahourtnature">Yahourt Nature</label>
		    			<input type="text" class="form-control" id="inputyahourtnature" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputyahourtfruit">Yahourt aux fruits</label>
		    			<input type="text" class="form-control" id="inputyahourtfruit" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
					<div class="form-group">
		    			<label for="inputfromageblanc">Fromage Blanc</label>
		    			<input type="text" class="form-control" id="inputfromageblanc" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputfaisselle">Faisselle</label>
		    			<input type="text" class="form-control" id="inputfaisselle" value="0">
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