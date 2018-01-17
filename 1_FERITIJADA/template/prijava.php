<div class="container-wrap">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<form class="log-in-form" action="autoriziraj.php" method="post" style="alignment-adjust: center;">
			  <h4 class="text-center">Prijava za suce</h4>
			  <label>Nadimak ili email
			    <input type="email" name="email" placeholder="sudac@hns.hr" value="<?php if(isset($_GET["email"])){
				    	echo $_GET["email"];
				    } ?>">
			  </label>
			  <label>Lozinka
			    <input type="password" name="lozinka" placeholder="sudac">
			  </label>
			  <input id="show-password" type="checkbox"><label for="show-password">Prikaži lozinku</label>
			  <p><input type="submit" class="button expanded" value="Prijava"></input></p>
			  <?php if(isset($_GET["neuspjelo"])){
				  	echo "Netočan email ili lozinka";
				  } ?>
			  
			</form>
		</div>
		</div>
