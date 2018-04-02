<?php include_once 'konfiguracija.php'; ?>
<!DOCTYPE HTML>
<html>
	<head>
		<?php include_once "template/head.php"; ?>
	</head>
	<body>
		
	<div class="fh5co-loader">
	</div>
	
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
			
			<?php 
							
						$izraz = $veza->prepare("select * from sport order by naziv");
						$izraz->execute();
						$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
						foreach ($rezultati as $red):
						?>
			
			<div class="row">
				<div class="col-md-4 text-center animate-box">
					<a href="sportovi/<?php echo $red->poziv; ?>.php" class="work" style=" width: 315px; height: 270px; background-image: url(images/<?php echo $red->poziv; ?>.jpg);">
						<div class="desc">
							<h3><?php echo $red->naziv; ?></h3>
							<span>Klikni za rezultate!</span>
						</div>
					</a>
					
				</div>
				
				 <?php endforeach; ?>
				
			</div>
		</div>
		
			
	<!-- END container-wrap -->
	</div>

	<?php include_once "template/podnozje.php"; ?>
	</div>

	
	<?php include_once "template/skripte.php"; ?>

	</body>
</html>

