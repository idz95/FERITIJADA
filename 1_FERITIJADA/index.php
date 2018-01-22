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
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center animate-box">
					<p>FERITIJADA u sportskom natjecanju krije mnogo zanimljivih brojki!</p>
					</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<div class="row">
						<div class="col-md-3 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="13" data-speed="1" data-refresh-interval="1"></span>
							<span class="fh5co-counter-label">FAKULTETA</span>
						</div>
						<div class="col-md-3 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="6" data-speed="2" data-refresh-interval="2"></span>
							<span class="fh5co-counter-label">Sportova</span>
						</div>
						<div class="col-md-3 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="432" data-speed="2" data-refresh-interval="2"></span>
							<span class="fh5co-counter-label">Sportaša</span>
						</div>
						<div class="col-md-3 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="19" data-speed="2" data-refresh-interval="2"></span>
							<span class="fh5co-counter-label">Sudaca</span>
						</div>
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

