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
		<h3>Utakmice nogomet</h3>
		<table class="table">
						<thead>
							<tr>
								
								<th scope="col">Domaćin</th>
								<th scope="col">Gost</th>
								<th scope="col">Datum i vrijeme</th>
								<th scope="col">Mjesto</th>
							
								<th scope="col">Sudac</th>
								<th scope="col">Rezultat</th>

							</tr>
						</thead>
						<tbody>
							
						<?php 
						
						$izraz = $veza->prepare("select * from utakmica where sport=1");
						$izraz->execute();
						$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
						foreach ($rezultati as $red):
						?>
							
							<tr>
								<td><?php echo $red->domacin ?></td>
								<td><?php echo $red->gost; ?></td>
								<td><?php echo $red->pocetak; ?></td>
								<td><?php echo $red->mjesto; ?></td>
								<td><?php echo $red->sudac; ?></td>
								
								<td>
									
								</td>

							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>


<br /><br />
			
		
		</div>
			

		
		

		
	</div><!-- END container-wrap -->

	<?php include_once "../template/podnozje.php"; ?>
	</div>

	<?php include_once "../template/skripte.php"; ?>

	</body>
</html>

