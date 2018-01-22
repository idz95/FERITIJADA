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
		
		<div id="fh5co-work">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2 style="font-size: 20px;">PRATI REZULTATE SVIH SPORTOVA NA FERITIJADI</h2>
					<p>Klikom na sliku otvarate rezultate svih sportova koji su završeni, te svih sljedećih utakmica.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 text-center animate-box">
					<a href="sportovi/nogomet.php" class="work" style="background-image: url(images/nogomet.jpg);">
						<div class="desc">
							<h3>NOGOMET</h3>
							<span>Klikni za rezultate!</span>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a href="sportovi/odbojka.php" class="work" style="background-image: url(images/odbojka.jpg);">
						<div class="desc">
							<h3>ODBOJKA</h3>
							<span>Klikni za rezultate!</span>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a href="sportovi/nogomet.php" class="work" style="background-image: url(images/rukomet1.jpg);">
						<div class="desc">
							<h3>RUKOMET</h3>
							<span>Klikni za rezultate!</span>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a href="sportovi/nogomet.php" class="work" style="background-image: url(images/kosarka.jpg);">
						<div class="desc">
							<h3>KOŠARKA</h3>
							<span>Klikni za rezultate!</span>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a href="sportovi/nogomet.php" class="work" style="background-image: url(images/nogomet.jpg);">
						<div class="desc">
							<h3>NOGOMET</h3>
							<span>Klikni za rezultate!</span>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a href="sportovi/nogomet.php" class="work" style="background-image: url(images/kosarka.jpg);">
						<div class="desc">
							<h3>KOŠARKA</h3>
							<span>Klikni za rezultate!</span>
						</div>
					</a>
				</div>
			</div>
		</div>
		
			
	<!-- END container-wrap -->
	</div>

	<?php include_once "template/podnozje.php"; ?>
	</div>

	
	<?php include_once "template/skripte.php"; ?>

	</body>
</html>

