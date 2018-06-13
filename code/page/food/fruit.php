<?php
	session_start(); 
	require "../../conf.inc.php";
	require "../../script/functions.php";
	include "../../header.php";
	
	?>


<form method="POST" action="script/scriptFruit.php">
	<div class="container" >
		<div class="form row">
			<div class="col-md-12 post">
						<center><h2 style="padding-top: 50px;">Les Classiques</h2></center>
			</div>
			<div class="col-md-12 post img_aliments" id="fruit1">
			</div>
			<div class="col-md-12 padding-bot-20">*Quantités en gramme</div>
				<div class="col-lg-3">
					<div class="form-group">
		    			<label for="inputpomme">Pomme</label>
		    			<input type="text" class="form-control" name="inputpomme" 
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputbanane">Banane</label>
		    			<input type="text" class="form-control" name="inputbanane" 
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
					<div class="form-group">
		    			<label for="inputabricot">Abricot</label>
		    			<input type="text" class="form-control" name="inputabricot" 
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputpoire">Poire</label>
		    			<input type="text" class="form-control" name="inputpoire"
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
					<div class="form-group">
		    			<label for="inputorange">Orange</label>
		    			<input type="text" class="form-control" name="inputorange" 
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
					<div class="form-group">
		    			<label for="inputmandarine">Mandarine</label>
		    			<input type="text" class="form-control" name="inputmandarine" 
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
					<div class="form-group">
		    			<label for="inputpamplemousse">Pamplemousse</label>
		    			<input type="text" class="form-control" name="inputpamplemousse" 
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputcitron">Citron</label>
		    			<input type="text" class="form-control" name="inputcitron" value="0">
		  			</div>
		  		</div>
		</div>
	</div>

	<div class="container" >
		<div class="form row">
			<div class="col-md-12 post">
						<center><h2 style="padding-top: 50px;">Fruits Rouges</h2></center>
			</div>
			<div class="col-md-12 post img_aliments" id="fruit2">
			</div>
			<div class="col-md-12 padding-bot-20">*Quantités en gramme</div>
				<div class="col-lg-3">
					<div class="form-group">
		    			<label for="inputfraise">Fraise</label>
		    			<input type="text" class="form-control" name="inputfraise" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputframboise">Framboise</label>
		    			<input type="text" class="form-control" name="inputframboise" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
					<div class="form-group">
		    			<label for="inputmyrtille">Myrtille</label>
		    			<input type="text" class="form-control" name="inputmyrtille" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputgroseille">Groseille</label>
		    			<input type="text" class="form-control" name="inputgroseille" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputraisin">Raisin</label>
		    			<input type="text" class="form-control" name="inputraisin" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputcerise">Cerise</label>
		    			<input type="text" class="form-control" name="inputcerise" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputmure">Mûre</label>
		    			<input type="text" class="form-control" name="inputmure" value="0">
		  			</div>
		  		</div>
		</div>
	</div>

	<div class="container" >
		<div class="form row">
			<div class="col-md-12 post">
						<center><h2 style="padding-top: 50px;">Les Autres</h2></center>
			</div>
			<div class="col-md-12 post img_aliments" id="legume3">
			</div>
			<div class="col-md-12 padding-bot-20">*Quantités en gramme</div>
				<div class="col-lg-3">
					<div class="form-group">
		    			<label for="inputpoivronvert">Poivron Vert</label>
		    			<input type="text" class="form-control" name="inputpoivronvert" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputpoivronrouge">Poivron Rouge</label>
		    			<input type="text" class="form-control" name="inputpoivronrouge" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
					<div class="form-group">
		    			<label for="inputchouxblanc">Choux Blanc</label>
		    			<input type="text" class="form-control" name="inputchouxblanc" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputchouxrouge">Choux Rouge</label>
		    			<input type="text" class="form-control" name="inputchouxrouge" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputchouxfleur">Choux-fleur</label>
		    			<input type="text" class="form-control" name="inputchouxfleur" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputtomate">Tomate</label>
		    			<input type="text" class="form-control" name="inputtomate" value="0">
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