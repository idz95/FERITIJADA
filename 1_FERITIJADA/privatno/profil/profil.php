<?php include_once '../../konfiguracija.php'; 
provjeraOvlasti();
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
					<a class="work" style="background-image: url(../../images/sudac.jpg);">
						<div class="desc">
							<h3>IME SUCA</h3>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<?php 
					echo "SUDAC IME PREZIME PODACI"; ?>
				</div>
				<div class="col-md-4 text-center animate-box">
					<?php 
					echo "SUDAC IME PREZIME PODACI"; ?>
				</div>
				
			</div>
		</div>

		
		

		
	</div><!-- END container-wrap -->

	<?php include_once "../../template/podnozje.php"; ?>
	</div>

	<?php include_once "../../template/skripte.php"; ?>

	</body>
</html>

