<?php include_once 'konfiguracija.php'; ?>
<!DOCTYPE HTML>
<html>
	<head>
		<?php include_once "template/head.php"; ?>
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	
		<?php include_once "template/izbornik.php"; ?>
	<div class="container-wrap">
		<?php include_once "template/indexslider.php"; ?>
		
		<div id="fh5co-counter" class="fh5co-counters">
			
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<div class="row">
						<?php  
						$izraz = $veza->prepare("
						select
						(select count(sifra) from fakultet)  as brFakultet,
						(select count(sifra) from sudac) as brSuci ,
						(select count(sifra) from sport) as brSport ;
						");
						$izraz->execute();
						$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
						foreach ($rezultati as $red):
						?>
			
						<div class="col-md-3 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="589" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Studenata</span>
						</div>
						<div class="col-md-3 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $red->brSuci;  ?>" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Sudaca</span>
						</div>
						<div class="col-md-3 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $red->brFakultet;  ?>" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Fakulteta</span>
						</div>
						<div class="col-md-3 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $red->brSport;  ?>" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Sportova</span>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
		
		
		

		
	</div><!-- END container-wrap -->

	<?php include_once "template/podnozje.php"; ?>
	</div>

	<?php include_once "template/skripte.php"; ?>

	</body>
</html>

