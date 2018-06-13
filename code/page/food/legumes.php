<?php
	session_start(); 
	require "../../conf.inc.php";
	require "../../script/functions.php";
	include "../../header.php";
	
	?>


<form method="POST" action="script/scriptLegume.php">
	<div class="container" >
		<div class="form row">
			<div class="col-md-12 post">
						<center><h2 style="padding-top: 50px;">Légumes Verts</h2></center>
			</div>
			<div class="col-md-12 post img_aliments" id="legume1">
			</div>
			<div class="col-md-12 padding-bot-20">*Quantités en gramme</div>
				<div class="col-lg-3">
					<div class="form-group">
		    			<label for="inputharicotvert">Haricot Verts</label>
		    			<input type="text" class="form-control" name="inputharicotvert" 
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputlaitue">Laitue</label>
		    			<input type="text" class="form-control" name="inputlaitue" 
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
					<div class="form-group">
		    			<label for="inputbrocoli">Brocoli</label>
		    			<input type="text" class="form-control" name="inputbrocoli" 
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputpoirreau">Poirreau</label>
		    			<input type="text" class="form-control" name="inputpoirreau"
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
					<div class="form-group">
		    			<label for="inputepinard">Epinards</label>
		    			<input type="text" class="form-control" name="inputepinard" 
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
					<div class="form-group">
		    			<label for="inputcourgette">Courgette</label>
		    			<input type="text" class="form-control" name="inputcourgette" 
		    			value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
					<div class="form-group">
		    			<label for="inputconcombre">Concombre</label>
		    			<input type="text" class="form-control" name="inputconcombre" 
		    			value="0">
		  			</div>
		  		</div>
		</div>
	</div>

	<div class="container" >
		<div class="form row">
			<div class="col-md-12 post">
						<center><h2 style="padding-top: 50px;">Légumes-racine</h2></center>
			</div>
			<div class="col-md-12 post img_aliments" id="legume2">
			</div>
			<div class="col-md-12 padding-bot-20">*Quantités en gramme</div>
				<div class="col-lg-3">
					<div class="form-group">
		    			<label for="inputcarotte">Carotte</label>
		    			<input type="text" class="form-control" name="inputcarotte" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputnavet">Navet</label>
		    			<input type="text" class="form-control" name="inputnavet" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
					<div class="form-group">
		    			<label for="inputbetterave">Betterave</label>
		    			<input type="text" class="form-control" name="inputbetterave" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputpatate">Patate</label>
		    			<input type="text" class="form-control" name="inputpatate" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputceleri">Celeri</label>
		    			<input type="text" class="form-control" name="inputceleri" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputgingembre">Gingembre</label>
		    			<input type="text" class="form-control" name="inputgingembre" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputradis">Radis</label>
		    			<input type="text" class="form-control" name="inputradis" value="0">
		  			</div>
		  		</div>
		  		<div class="col-lg-3">
		  			<div class="form-group">
		    			<label for="inputpersil">Persil</label>
		    			<input type="text" class="form-control" name="inputpersil" value="0">
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