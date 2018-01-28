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
	
	<h4>Dodavanje utakmice!</h4>		
	<form>
  <div class="form-row">
    
    <div class="form-group col-md-4">
      <label for="inputState">Sport</label>
      <select id="inputState" class="form-control">
        <option selected>Odaberi sport...</option>
        <option>Nogomet</option>
         <option>Rukomet</option>
          <option>Košarka</option>
      </select>
    </div>
    <div class="form-group col-md-4">
     	
     	<label for="inputState">Ekipa 1</label>
      <select id="inputState" class="form-control">
        <option selected>Odaberi ekipu</option>
        <option>FERIT</option>
         <option>FER</option>
          <option>RITEH</option>
      </select>
     </div>
     <div class="form-group col-md-4">
     	
     	<label for="inputState">Ekipa 2</label>
      <select id="inputState" class="form-control">
        <option selected>Odaberi ekipu</option>
        <option>FERIT</option>
         <option>FER</option>
          <option>RITEH</option>
      </select>
     </div>
     
 
     <div class="form-group col-md-4">
     	<label for="inputState">Datum</label>
        <input type="text" class="form-control" placeholder="DD/MM/GGGG">
      </select>
     </div>
     
      <div class="form-group col-md-4">
     	<label for="inputState">Vrijeme</label>
        <input type="text" class="form-control" placeholder="HH:MM">
      </select>
     </div>
    
    <div class="form-group col-md-4">
    	<label for="inputState">Sudac</label>
      <select id="inputState" class="form-control">
        <option selected>Odaberi suca...</option>
        <option>Miro Mirić</option>
         <option>Matko Marić</option>
          <option>Kemal Ibro</option>
      </select>
    </div>
     <div class="form-group col-md-4">
     	
     	<label for="inputState">Lokacija</label>

        <input type="text" class="form-control" placeholder="Mjesto održavanja">
      </select>
     </div>
     
     
     <div class="form-group col-md-4">
     	<label for="inputState">Napomena</label>
        <input type="text" class="form-control" placeholder="Napomena">
      </select>
     </div>
     
     
     
     
     
     
     
     </div>

  		<button type="submit" class="btn btn-primary">Dodaj utakmicu</button>
  		
	</form>

				
			
			
				
	</div>
		

		
			

		
		

		
	</div><!-- END container-wrap -->

	<?php include_once "../template/podnozje.php"; ?>
	</div>

	<?php include_once "../template/skripte.php"; ?>

	</body>

</html>

