<?php include_once '../konfiguracija.php'; 

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
		<h3>Svi suci FERITIJADE</h3>
		<table class="table">
						<thead>
							<tr>
								
								<th scope="col">Ime i prezime</th>
								<th scope="col">Email</th>
								<th scope="col">Sport</th>
								<th scope="col">Kontakt</th>


							</tr>
						</thead>
						<tbody>
							
						<?php 
						$izraz = $veza->prepare("select * from sudac order by prezime, ime;");
						$izraz->execute();
						$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
						foreach ($rezultati as $red):
						?>
							
							<tr>
								<td><?php echo $red->ime . " " . $red->prezime; ?></td>
								<td><?php echo $red->email; ?></td>
								<td><?php echo $red->sport; ?></td>
								<td><?php echo $red->mobitel; ?></td>
								
								<td>
									<a href="#"><i class="far fa-edit fa-2x"></i></a>
									<a href="#"><i class="far fa-trash-alt fa-2x"></i></a> 
								</td>

							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
			
		
		</div>
			
			

		
		

		
	</div><!-- END container-wrap -->

	<?php include_once "../template/podnozje.php"; ?>
	</div>

	<?php include_once "../template/skripte.php"; ?>

	</body>
</html>

