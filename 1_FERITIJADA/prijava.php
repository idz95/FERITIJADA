<?php include_once 'konfiguracija.php'; ?>
<!DOCTYPE HTML>
<html>
	<head>
		<?php include_once "template/head.php"; ?>
	</head>
	<body>
		
	
	
	<div id="page">
	<?php include_once "template/izbornik.php"; ?>
	<div class="container-wrap">
		
		<div class="row animate-box">
		<div id="log-in-div">
		<div class="col-sm-3"></div>
		<div class="col-sm-6 text-center">
			<form class="log-in-form" action="autoriziraj.php" method="post" style="alignment-adjust: center;">
			  <h4 class="text-center">Prijava za suce</h4>
			  <label>Nadimak ili email
			    <input type="email" name="email" placeholder="sudac@hns.hr" value="<?php if(isset($_GET["email"])){
				    	echo $_GET["email"];
				    }else{
				    	if($dev){
				    		echo "admin@hns.hr";
				    	}
				    }
					
					
					 ?>">
			  </label>
			  <label>Lozinka
			    <input type="password" name="lozinka" placeholder="sudac" value="<?php echo $dev ? "e" : "";  ?>">
			  </label>
			  
			  <p><input type="submit" class="success button expanded" value="Prijava"></input></p>
			  <?php if(isset($_GET["neuspjelo"])){
				  	echo "Netočan email ili lozinka";
				  } ?>
			  
			</form>
		</div>
	</div>
	
</div>
</div>

	

	
		

		
	<!-- END container-wrap -->

	<?php include_once "template/podnozje.php"; ?>
	</div>

	<?php include_once "template/skripte.php"; ?>

	</body>
</html>

