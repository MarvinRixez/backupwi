<?php
	session_start(); 
	require "../../conf.inc.php";
	require "../../script/functions.php";
	include "../../header.php";
	
	?>

<form method="POST" action="script/scriptFish.php">
	<div class="container" >
		<div class="form row">
			<div class="col-md-12 post">
						<center><h2 style="padding-top: 50px;">Les Classiques</h2></center>
			</div>
			<div class="col-md-12 post img_aliments" id="poisson">
			</div>
			<div class="col-md-12 padding-bot-20">*Quantités en gramme</div>
				<div class="col-lg-2">
					<div class="form-group">
		    			<label for="inputthon">Thon</label>
		    			<input type="text" class="form-control" id="inputthon" 
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-2">
		  			<div class="form-group">
		    			<label for="inputsaumon">Saumon</label>
		    			<input type="text" class="form-control" id="inputsaumon" 
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-2">
					<div class="form-group">
		    			<label for="inputcabillaud">Cabillaud</label>
		    			<input type="text" class="form-control" id="inputcabillaud" 
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-2">
		  			<div class="form-group">
		    			<label for="inputlotte">Lotte</label>
		    			<input type="text" class="form-control" id="inputlotte"
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-2">
					<div class="form-group">
		    			<label for="inputmaquereau">Maquereau</label>
		    			<input type="text" class="form-control" id="inputmaquereau" 
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-2">
		  			<div class="form-group">
		    			<label for="inputsardine">sardine</label>
		    			<input type="text" class="form-control" id="inputsardine" 
		    			value="0">
		  			</div>
		  		</div>
		</div>
	</div>

	<div class="container" >
		<div class="form row">
			<div class="col-md-12 post">
						<center><h2 style="padding-top: 50px;">Fruits de Mer</h2></center>
			</div>
			<div class="col-md-12 post img_aliments" id="fruitdemer">
			</div>
			<div class="col-md-12 padding-bot-20">*Quantités en gramme</div>
				<div class="col-lg-3">
					<div class="form-group">
		    			<label for="inputcrevette">Crevettes</label>
		    			<input type="text" class="form-control" id="inputcrevette" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputbulot">bulot</label>
		    			<input type="text" class="form-control" id="inputbulot" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
					<div class="form-group">
		    			<label for="inputlangoustine">Langoustines</label>
		    			<input type="text" class="form-control" id="inputlangoustine" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputsaintjacques">Saint-Jacques</label>
		    			<input type="text" class="form-control" id="inputsaintjacques" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-4">
		  			<div class="form-group">
		    			<label for="inputhomard">Homard</label>
		    			<input type="text" class="form-control" id="inputhomard" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-4">
		  			<div class="form-group">
		    			<label for="inputhuitre">Huitres</label>
		    			<input type="text" class="form-control" id="inputhuitre" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-4">
		  			<div class="form-group">
		    			<label for="inputlangouste">Langouste</label>
		    			<input type="text" class="form-control" id="inputlangouste" value="0">
		  			</div>
		  		</div>
		</div>
	</div>
	<div class="container" >
		<div class="form row">
			<div class="col-md-12 post">
						<center><h2 style="padding-top: 50px;">Les Exotiques</h2></center>
			</div>
			<div class="col-md-12 post img_aliments" id="poisson2">
			</div>
			<div class="col-md-12 padding-bot-20">*Quantités en gramme</div>
				<div class="col-lg-2">
					<div class="form-group">
		    			<label for="inputdorade">Dorade</label>
		    			<input type="text" class="form-control" id="inputdorade" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-2">
		  			<div class="form-group">
		    			<label for="inputbar">Bar</label>
		    			<input type="text" class="form-control" id="inputbar" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-2">
					<div class="form-group">
		    			<label for="inputraie">Raie</label>
		    			<input type="text" class="form-control" id="inputraie" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-2">
		  			<div class="form-group">
		    			<label for="inputpoulpe">Poulpe</label>
		    			<input type="text" class="form-control" id="inputpoulpe" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-2">
					<div class="form-group">
		    			<label for="inputseche">Séche</label>
		    			<input type="text" class="form-control" id="inputseche" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-2">
		  			<div class="form-group">
		    			<label for="inputrequin">Requin</label>
		    			<input type="text" class="form-control" id="inputrequin" value="0">
		  			</div>
		  		</div>
		</div>
	</div>

	<div class="form row">
		<div class="container">
			<center>
				<button type="submit" class="btn btn-primary">Terminer</button>
			</center>
		</div>
	</div>
</form>

<?php include "../../footer.php"; ?>