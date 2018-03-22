<?php include_once '../../konfiguracija.php'; 
provjeraOvlasti();
isset($_GET["sifra"]);
?>


<!DOCTYPE HTML>
<html>
	<head>
		<?php include_once "../../template/head.php"; ?>
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
		
	<?php include_once "../../template/izbornik.php"; ?>
	<div class="container-wrap">

	<div id="fh5co-work">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2 style="font-size: 20px;">MOJ PROFIL</h2>
					
				</div>
			</div>
			
					 
			<div class="row">
				
				<div class="col-md-4 text-center animate-box">
					<div class="list-group">
						<a href="#" class="list-group-item active">Moj profil!</a>
								<a href="utakmice.php?sifra=<?php   ?>" class="list-group-item">Moje utakmice</a>
								<a href="racun.php" class="list-group-item">Postavke računa</a>
								
							 
					</div>
				</div>
				
			
				<div class="col-md-4 text-center animate-box">
					<h4>Uloga: <?php echo $_SESSION[$appID."autoriziran"]->uloga; ?></h4>
					<h4><?php echo $_SESSION[$appID."autoriziran"]->ime . " " . $_SESSION[$appID."autoriziran"]->prezime; ?></h4>
					<h4> <?php echo $_SESSION[$appID."autoriziran"]->email; ?></h4>
					<h4>Utakmica suđeno: 12</h4>
				</div>
				
				<div class="col-md-4 text-center animate-box">
					<a class="work" style="background-image: url(../../images/sudac.jpg);">
						<div class="desc">
						<h4><?php echo $_SESSION[$appID."autoriziran"]->ime . " " . $_SESSION[$appID."autoriziran"]->prezime; ?></h4>
						</div>
					</a>
				</div>
				
				
			</div>
		</div>

		
		

		
	</div><!-- END container-wrap -->

	<?php include_once "../../template/podnozje.php"; ?>
	</div>

	<?php include_once "../../template/skripte.php"; ?>

	</body>
</html>

