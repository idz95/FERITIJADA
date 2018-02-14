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
    			 <?php 
							
						$izraz = $veza->prepare("select * from sport order by naziv");
						$izraz->execute();
						$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
						foreach ($rezultati as $red):
						?>
        <option><?php echo $red->naziv; ?></option>
			<?php endforeach; ?>
      </select>
      
    </div>
    <div class="form-group col-md-4">
     	
     	<label for="inputState">Ekipa 1</label>
      <select id="inputState" class="form-control">
        <option selected>Odaberi ekipu</option>
        <?php 
							
						$izraz = $veza->prepare("select * from fakultet order by naziv");
						$izraz->execute();
						$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
						foreach ($rezultati as $red):
						?>
        <option><?php echo $red->naziv; ?></option>
         <?php endforeach; ?>
      </select>
     </div>
     <div class="form-group col-md-4">
     	
     	<label for="inputState">Ekipa 2</label>
      <select id="inputState" class="form-control">
        <option selected>Odaberi ekipu</option>
           <?php 
							
						$izraz = $veza->prepare("select * from fakultet order by naziv");
						$izraz->execute();
						$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
						foreach ($rezultati as $red):
						?>
        <option><?php echo $red->naziv; ?></option>
         <?php endforeach; ?>
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
           <?php 
							
						$izraz = $veza->prepare("select * from sudac order by prezime, ime");
						$izraz->execute();
						$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
						foreach ($rezultati as $red):
						?>
        <option><?php echo $red->ime . " " . $red->prezime; ?></option>
         <?php endforeach; ?>
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

