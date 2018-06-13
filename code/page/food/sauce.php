<?php
	session_start(); 
	require "../../conf.inc.php";
	require "../../script/functions.php";
	include "../../header.php";
	
	?>


<form method="POST" action="script/scriptSauce.php">
	<div class="container" >
		<div class="form row">
			<div class="col-md-12 post">
						<center><h2 style="padding-top: 50px;">Les Classiques</h2></center>
			</div>
			<div class="col-md-12 post img_aliments" id="sauce">
			</div>
			<div class="col-md-12 padding-bot-20">*Quantités en gramme</div>
				<div class="col-lg-2">
					<div class="form-group">
		    			<label for="inputsteak">ketchup</label>
		    			<input type="text" class="form-control" name="inputketchup" 
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-2">
		  			<div class="form-group">
		    			<label for="inputfilet">Mayonnaise</label>
		    			<input type="text" class="form-control" name="inputmayonnaise" 
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-2">
					<div class="form-group">
		    			<label for="inputviandehachee">Moutarde</label>
		    			<input type="text" class="form-control" name="inputmoutarde" 
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-2">
		  			<div class="form-group">
		    			<label for="inputlangue">BBQ</label>
		    			<input type="text" class="form-control" name="inputbbq"
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-2">
					<div class="form-group">
		    			<label for="inputpoitrine">Vinaigrette</label>
		    			<input type="text" class="form-control" name="inputvinaigrette" 
		    			value="0">
		  			</div>
		  		</div>
		</div>
	</div>

	<div class="container" >
		<div class="form row">
			<div class="col-md-12 post">
						<center><h2 style="padding-top: 50px;">Les Exotiques</h2></center>
			</div>
			<div class="col-md-12 post img_aliments" id="sauce2">
			</div>
			<div class="col-md-12 padding-bot-20">*Quantités en gramme</div>
				<div class="col-lg-3">
					<div class="form-group">
		    			<label for="inputaile">Sauce Soja sucrée</label>
		    			<input type="text" class="form-control" name="inputsojasucree" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputcuisse">Sauce Soja salée</label>
		    			<input type="text" class="form-control" name="inputsojasalee" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
					<div class="form-group">
		    			<label for="inputblanc">Sauce huître</label>
		    			<input type="text" class="form-control" name="inputsaucehuitre" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputpouletentier">Harissa</label>
		    			<input type="email" class="form-control" name="inputharissa" value="0">
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