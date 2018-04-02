<?php include_once '../konfiguracija.php'; 
provjeraOvlasti();
?>


<!DOCTYPE HTML>
<html>
	<head>
		<?php include_once "../template/head.php"; ?>
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
		
	<?php include_once "../template/izbornik.php"; ?>
	<div class="container-wrap">

	<div id="fh5co-work">
			<div class="row animate-box" >
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2 style="font-size: 20px;">Nadzorna ploča administratora</h2>
					
				</div>
			</div>
			<div class="row">
						<div class="col-md-4 text-center animate-box">
							
								<a href="#" class="list-group-item active">Dodavanje komponenti! </a>
								<a href="upravljanje/dodavanjeUtakmice.php" class="list-group-item">Sportska utakmica</a>
								<a href="fakulteti/dodaj.php" class="list-group-item">Fakultet</a>
								<a href="suci/dodaj.php" class="list-group-item">Sudac</a>

							
							
							

						</div>
						<div class="col-md-4 text-center animate-box">
						
							<a href="#" class="list-group-item active">UPRAVLJANJE! </a>
							
							<a href="suci/suci.php" class="list-group-item">Suci</a>
							<a href="fakulteti/fakulteti.php" class="list-group-item">Fakulteti</a>


						
						</div>
						
						<div class="col-md-4 text-center animate-box">
							<a href="upravljanje/eraDijagram.php" class="list-group-item">ERA dijagram</a>
						</div>
							

					</div>
			
				
				
			</div>
		</div>

		
			

		
		
<?php include_once "../template/podnozje.php"; ?>
		
	</div><!-- END container-wrap -->

	
	</div>

	<?php include_once "../template/skripte.php"; ?>

	</body>
</html>

