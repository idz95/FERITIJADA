<?php include_once '../konfiguracija.php'; 
if(!isset($_SESSION["autoriziran"])){
	header("location: " . $putanjaAPP);
}
?>


<!DOCTYPE HTML>
<html>
	<head>
		<?php include_once "../template/head.php"; ?>
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
		<?php include_once '../template/zaglavlje.php'; ?>
	<?php include_once "../template/izbornik.php"; ?>
	<div class="container-wrap">
		<?php include_once "../template/indexslider.php"; ?>
		<?php 
			
				print_r($_SESSION);
				?>
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
		
		
		

		<div id="fh5co-blog" class="blog-flex">
			<div class="featured-blog" style="background-image: url(images/blog-1.jpg);">
				<div class="desc-t">
					<div class="desc-tc">
						<span class="featured-head">Prijedlog</span>
						<h3><a href="#">FERITIJADA uskoro otvara prijave za natjecanje!</a></h3>
						<span><a href="#" class="read-button">Pročitaj više</a></span>
					</div>
				</div>
			</div>
			<div class="blog-entry fh5co-light-grey">
				<div class="row animate-box">
					<div class="col-md-12">
						<h2>Zadnje vijesti</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<a href="#" class="blog-post">
							<span class="img" style="background-image: url(images/blog-2.jpg);"></span>
							<div class="desc">
								<h3>FER zagreb brani naslov od prošle godine!</h3>
								<span class="cat">Više ...</span>
							</div>
						</a>
					</div>
					<div class="col-md-12 animate-box">
						<a href="#" class="blog-post">
							<span class="img" style="background-image: url(images/blog-1.jpg);"></span>
							<div class="desc">
								<h3>Ove godine se očekuje više sportaša na FERITIJADI!</h3>
								<span class="cat">Više ...</span>
							</div>
						</a>
					</div>
					<div class="col-md-12 animate-box">
						<a href="#" class="blog-post">
							<span class="img" style="background-image: url(images/blog-3.jpg);"></span>
							<div class="desc">
								<h3>Prijavi se na natječaj za suce!</h3>
								<span class="cat">Više ...</span>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div><!-- END container-wrap -->

	<?php include_once "../template/podnozje.php"; ?>
	</div>

	<?php include_once "../skripte.php"; ?>

	</body>
</html>

