<?php include_once '../../konfiguracija.php'; 
provjeraOvlasti();
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
  <li><a data-toggle="tab" href="#menu2"></a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h3>Suđene utakmice</h3>
					<table class="table">
						<thead>
							<tr>
								<th scope="col"></th>
								<th scope="col">Domaćin</th>
								<th scope="col">Gost</th>
								<th scope="col">Datum i vrijeme</th>
								<th scope="col">Mjesto</th>
								<th scope="col">Sudac</th>
								<th scope="col">Rezultat</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>FERIT</td>
								<td>FER</td>
								<td>1.1.2018. 20:00</td>
								<td>Dvorana Vijuš</td>
								<td>Ivo Ivić</td>

							</tr>
							<tr>
								<th scope="row">2</th>
								<td>RITEH</td>
								<td>FTN</td>
								<td>1.1.2018. 22:00</td>
								<td>Vanjski Teren</td>
								<td>Marko Perić</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>FERIT</td>
								<td>FER</td>
								<td>1.1.2018. 20:00</td>
								<td>Dvorana Vijuš</td>
								<td>Ivo Ivić</td>
							</tr>
							<tr>
								<th scope="row">4</th>
								<td>FERIT</td>
								<td>FER</td>
								<td>1.1.2018. 20:00</td>
								<td>Dvorana Vijuš</td>
								<td>Ivo Ivić</td>
							</tr>
							<tr>
								<th scope="row">5</th>
								<td>FERIT</td>
								<td>FER</td>
								<td>1.1.2018. 20:00</td>
								<td>Dvorana Vijuš</td>
								<td>Ivo Ivić</td>
							</tr>
						</tbody>
					</table>
  </div>
  <div id="menu1" class="tab-pane fade">
  <h3>Sljedeće utakmice</h3>
					<table class="table">
						<thead>
							<tr>
								<th scope="col"></th>
								<th scope="col">Domaćin</th>
								<th scope="col">Gost</th>
								<th scope="col">Datum i vrijeme</th>
								<th scope="col">Mjesto</th>
								<th scope="col">Sudac</th>
								<th scope="col">Rezultat</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>FERIT</td>
								<td>FER</td>
								<td>1.1.2018. 20:00</td>
								<td>Dvorana Vijuš</td>
								<td>Ivo Ivić</td>

							</tr>
							<tr>
								<th scope="row">2</th>
								<td>RITEH</td>
								<td>FTN</td>
								<td>1.1.2018. 22:00</td>
								<td>Vanjski Teren</td>
								<td>Marko Perić</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>FERIT</td>
								<td>FER</td>
								<td>1.1.2018. 20:00</td>
								<td>Dvorana Vijuš</td>
								<td>Ivo Ivić</td>
							</tr>
							<tr>
								<th scope="row">4</th>
								<td>FERIT</td>
								<td>FER</td>
								<td>1.1.2018. 20:00</td>
								<td>Dvorana Vijuš</td>
								<td>Ivo Ivić</td>
							</tr>
							<tr>
								<th scope="row">5</th>
								<td>FERIT</td>
								<td>FER</td>
								<td>1.1.2018. 20:00</td>
								<td>Dvorana Vijuš</td>
								<td>Ivo Ivić</td>
							</tr>
						</tbody>
					</table>
  </div>

</div>
					

					

					<br />
					<br />

				</div>

		
		

		
	</div><!-- END container-wrap -->

	<?php include_once "../../template/podnozje.php"; ?>
	</div>

	<?php include_once "../../template/skripte.php"; ?>

	</body>
</html>

