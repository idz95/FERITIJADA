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
		<h3>Utakmice rukomet za datum 1.1.2018.</h3>
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
						$izraz = $veza->prepare("
						select a.sifra, a.mjesto, a.pocetak,  a.domacin_score, a.gost_score, b.ime, b.prezime, c.naziv as domacin, d.naziv as gost
						from utakmica a 
						inner join sudac b on a.sudac=b.sifra
						inner join fakultet c on a.domacin=c.sifra
                        inner join fakultet d on a.gost=d.sifra
						where a.sport=3
						order by pocetak desc;
						");
						$izraz->execute();
						$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
						foreach ($rezultati as $red):
						?>
							
							<tr>
								<td><?php echo $red->domacin ?></td>
								<td><?php echo $red->gost; ?></td>
								<td><?php echo date("d.m.Y. G:i",strtotime($red->pocetak)); ?></td>
								<td><?php echo $red->mjesto; ?></td>
								<td><?php echo $red->ime . " " . $red->prezime; ?></td>
								
								<td>
									<?php echo $red->domacin_score . " : " . $red->gost_score;  ?>
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

