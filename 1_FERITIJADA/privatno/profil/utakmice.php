<?php include_once '../../konfiguracija.php'; 
provjeraOvlasti();


isset($_GET["sifra"]);

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
		
		<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Suđene utakmice</a></li>
  <li><a data-toggle="tab" href="#menu1">Sljedeće utakmice</a></li>
 
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    
    <h3>Prošle utakmice</h3>
    <h5>Unesi rezultat ako to nisi uradio!</h5>
		<table class="table">
						<thead>
							<tr>
								
								<th scope="col">Domaćin</th>
								<th scope="col">Gost</th>
								<th scope="col">Datum i vrijeme</th>
								<th scope="col">Mjesto</th>
								<th scope="col">Sport</th>
								<th scope="col">Rezultat</th>

							</tr>
						</thead>
						<tbody>
							
						<?php 
						$izraz = $veza->prepare("
						
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
								<td><?php echo $red->sport; ?></td>
								
								
								<td>
									<input type="text" />
							
								</td>

							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					  </div>
					
					
					

  	<div id="menu1" class="tab-pane fade">
    
    <h3>Sljedeće utakmice</h3>
		<table class="table">
						<thead>
							<tr>
								
								<th scope="col">Domaćin</th>
								<th scope="col">Gost</th>
								<th scope="col">Datum i vrijeme</th>
								<th scope="col">Mjesto</th>
								<th scope="col">Sport</th>
								<th scope="col">Rezultat</th>

							</tr>
						</thead>
						<tbody>
							
						<?php 
						$izraz = $veza->prepare("
						select a.sifra, a.domacin, a.gost, a.mjesto, a.pocetak, b.ime, b.prezime 
						from utakmica a inner join sudac b
						on a.sudac=b.sifra
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
								<td><?php echo $red->sport; ?></td>
								
								
								<td>
									<input type="text" />
							
								</td>

							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					  </div>
					
			</div>
										

					

				
				

		
		

		
	</div><!-- END container-wrap -->

	<?php include_once "../../template/podnozje.php"; ?>
	</div>

	<?php include_once "../../template/skripte.php"; ?>

	</body>
</html>

