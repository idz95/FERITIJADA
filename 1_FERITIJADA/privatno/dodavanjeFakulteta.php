<?php include_once '../konfiguracija.php'; 
provjeraOvlasti();
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
			<h4>Dodavanje fakulteta!</h4>
	<form>
  <div class="form-row">
  	
  	
    
    <div class="form-group col-md-4">
     	<label for="inputState">Naziv fakulteta</label>
        <input type="text" class="form-control" id="ime" placeholder="Naziv fakulteta">
      </select>
     </div>
    <div class="form-group col-md-4">
     	<label for="inputState">Kratica</label>
        <input type="text" class="form-control" id="prezime" placeholder="Kratica">
      </select>
     </div>
     
     <div class="form-group col-md-4">
     	<label for="inputState">Država</label>
        <input type="text" class="form-control" id="prezime" placeholder="Država">
      </select>
     </div>
     
     <div class="form-group col-md-4">
     	<label for="inputState">Grad</label>
        <input type="text" class="form-control" id="prezime" placeholder="Grad">
      </select>
     </div>
     
     
     <div class="form-group col-md-4">	
     	<label for="inputState">Broj sportaša na natjecanju</label>
        <input type="number" class="form-control" placeholder="Broj sportaša">
      </select>
     </div>
     
     <div class="form-group col-md-4">	
     	<label for="inputState">Kontakt broj predstavnika sportaša</label>
        <input type="text" class="form-control" placeholder="Mobitel">
      </select>
     </div>
  
     </div>

     
     
    
  
</form>
<button type="submit" class="btn btn-primary">Dodaj fakultet</button>

				
			
			
				
	</div>
		

		
			

		
		

		
	</div><!-- END container-wrap -->

	<?php include_once "../template/podnozje.php"; ?>
	</div>

	<?php include_once "../template/skripte.php"; ?>

	</body>

</html>

