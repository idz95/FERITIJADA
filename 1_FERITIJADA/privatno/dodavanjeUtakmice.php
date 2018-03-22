<?php include_once '../konfiguracija.php'; 
provjeraOvlasti();

$greska=array();

if($_POST){
	include_once 'kontrole.php';
	
	
	if(count($greska)==0){
		unset($_POST["sifra"]);
		$izraz=$veza->prepare("insert into utakmica (mjesto, pocetak, sport, sudac, domacin, gost) 
							values (:mjesto, :datumpocetka, :sport, :sudac, :domacin, :gost);");
		$izraz->execute($_POST);
		header("location: nadzornaPloca.php");
	}

}


?>


<!DOCTYPE HTML>
<html>
	<head>
		<?php include_once "../template/head.php"; ?>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
		
	<?php include_once "../template/izbornik.php"; ?>
	<div class="container-wrap">

	<div id="fh5co-work">
	
	<h4>Dodavanje utakmice!</h4>		
	<form action="" method="post">
  <div class="form-row">
    
    <div class="form-group col-md-4">
      <label>Odaberi Sport</label>
         
        
      <select id="sport" name="sport" class="form-control">
        
    			 <?php 
							
						$izraz = $veza->prepare("select sifra, naziv from sport order by naziv");
						$izraz->execute();
						$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
						foreach ($rezultati as $red):
						?>
        <option value="<?php echo $red->sifra; ?>"><?php echo $red->naziv; ?></option>
        <?php $sport=$_POST["sport"];  ?>
			<?php endforeach; ?>
      </select>
      
    </div>
    <div class="form-group col-md-4">
     	
     	<label>Odaberi Ekipa 1</label>
      <select id="domacin" name="domacin" class="form-control">
        
        <?php 
							
						$izraz = $veza->prepare("select * from fakultet order by naziv");
						$izraz->execute();
						$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
						foreach ($rezultati as $red):
						?>
        <option value="<?php echo $red->sifra; ?>"><?php echo $red->naziv; ?></option>
        <?php  $domacin=$_POST["domacin"];  ?>
         <?php endforeach; ?>
      </select>
     </div>
     <div class="form-group col-md-4">
     	
     	<label>Odaberi Ekipa 2</label>
      <select id="gost" name="gost" class="form-control">
       
           <?php 
							
						$izraz = $veza->prepare("select * from fakultet order by naziv");
						$izraz->execute();
						$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
						foreach ($rezultati as $red):
						?>
        <option value="<?php echo $red->sifra; ?>"><?php echo $red->naziv; ?></option>
        <?php  $gost=$_POST["gost"];  ?>
         <?php endforeach; ?>
      </select>
     </div>
     
 
     <div class="form-group col-md-4">
     	<label id="" name="datumpocetka">Datum i vrijeme</label>
        <input type="date" id="datumpocetka" name="datumpocetka" class="form-control" placeholder=""
        value="<?php echo isset($_POST["datumpocetka"]) ? $_POST["datumpocetka"] : ""; ?>">
      </select>
     </div>
     
    
    
    <div class="form-group col-md-4">
    	<label>Odaberi Sudac</label>
      <select id="sudac" name="sudac" class="form-control">
        
           <?php 
							
						$izraz = $veza->prepare("select * from sudac order by prezime, ime");
						$izraz->execute();
						$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
						foreach ($rezultati as $red):
						?>
        <option value="<?php echo $red->sifra; ?>"><?php echo $red->ime . " " . $red->prezime . " - " . $red->sport; ?></option>
        <?php  $sudac=$_POST["sudac"];  ?>
         <?php endforeach; ?>
      </select>
    </div>
     <div class="form-group col-md-4">
     	
     	<label>Lokacija</label>

        <input type="text" id="mjesto" name="mjesto" class="form-control" placeholder="Mjesto održavanja"
        value="<?php echo isset($_POST["mjesto"]) ? $_POST["mjesto"] : ""; ?>">
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
	<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/hr.js"></script>
    <script>
    	$("#datumpocetka").flatpickr({
    		locale: "hr",
    		minDate: "today",
    		enableTime:true
 
    	});
    </script>
	</body>

</html>

