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
			<h4>Dodavanje suca!</h4>
	<form>
  <div class="form-row">
  	
  	
    
    <div class="form-group col-md-4">
     	<label for="inputState">Ime</label>
        <input type="text" class="form-control" id="ime" placeholder="Ime">
      </select>
     </div>
    <div class="form-group col-md-4">
     	<label for="inputState">Prezime</label>
        <input type="text" class="form-control" id="prezime" placeholder="Prezime">
      </select>
     </div>
     <div class="form-group col-md-4">
     	
     	<label for="inputState">Sport</label>
      <select id="inputState" class="form-control">
        <option selected>Odaberi sport</option>
        <option>Nogomet</option>
         <option>Rukomet</option>
          <option>Košarka</option>
          <option>Odbojka</option>
      </select>
     </div>
     
    <div class="form-group col-md-4">
    	<label for="inputState">Fakultet</label>
      <select id="inputState" class="form-control">
        <option selected>Odaberi Fakultet</option>
        <option>FERIT</option>
         <option>FER</option>
          <option>RITEH</option>
      </select>
    </div>
    
     <div class="form-group col-md-4">
     	<label for="inputState">Email adresa</label>
        <input type="email" class="form-control" placeholder="primjer@primjer.com">
      </select>
     </div>
     
     <div class="form-group col-md-4">	
     	<label for="inputState">Kontakt broj</label>
        <input type="text" class="form-control" placeholder="Broj Mobitel">
      </select>
     </div>
     
     </div>

     
     
    
  
</form>
<button type="submit" class="btn btn-primary">Dodaj suca</button>

				
			
			
				
	</div>
		

		
			

		
		

		
	</div><!-- END container-wrap -->

	<?php include_once "../template/podnozje.php"; ?>
	</div>

	<?php include_once "../template/skripte.php"; ?>

	</body>

</html>

