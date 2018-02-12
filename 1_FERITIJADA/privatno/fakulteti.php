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
		<h3>Fakulteti</h3>
		<table class="table">
						<thead>
							<tr>
								
								<th scope="col">Naziv</th>
								<th scope="col">Grad</th>
								<th scope="col">Država</th>
							


							</tr>
						</thead>
						<tbody>
							
						<?php 
						$izraz = $veza->prepare("select * from fakultet order by grad, drzava;");
						$izraz->execute();
						$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
						foreach ($rezultati as $red):
						?>
							
							<tr>
								<td><?php echo $red->naziv; ?></td>
								<td><?php echo $red->grad; ?></td>
								<td><?php echo $red->drzava; ?></td>
							
								
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

