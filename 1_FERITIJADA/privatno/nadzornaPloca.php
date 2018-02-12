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
							<div class="list-group">
								<a href="#" class="list-group-item active">Dodavanje komponenti! </a>
								<a href="dodavanjeUtakmice.php" class="list-group-item">Sportska utakmica</a>
								<a href="dodavanjeSuca.php" class="list-group-item">Dodavanje suca.</a>
								<a href="dodavanjeFakulteta.php" class="list-group-item">Dodavanje Frakulteta</a>

							</div>
							
							<div class="list-group">
							<a href="#" class="list-group-item active">Upravljanje osobama! </a>
							<a href="administracija.php" class="list-group-item">Administracija</a>
							<a href="suci.php" class="list-group-item">Suci</a>
							<a href="fakulteti.php" class="list-group-item">Fakulteti</a>

						</div>

						</div>

					</div>
			
				
				
			</div>
		</div>

		
			

		
		

		
	</div><!-- END container-wrap -->

	<?php include_once "../template/podnozje.php"; ?>
	</div>

	<?php include_once "../template/skripte.php"; ?>

	</body>
</html>

