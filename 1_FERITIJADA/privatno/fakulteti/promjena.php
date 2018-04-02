<?php include_once '../../konfiguracija.php'; 
provjeraOvlasti();

if(!isset($_GET["sifra"])){
	$greska=array();
	
	if(isset($_POST["sifra"])){
		
		include_once 'kontrole.php';

	if(count($greska)==0){
		$izraz=$veza->prepare("update fakultet set naziv=:naziv, puni_naziv=:puni_naziv, 
		kontakt=:kontakt, drzava=:drzava, grad=:grad where sifra=:sifra;");
		$izraz->execute($_POST);
		header("location: fakulteti.php");
	}
	
	}else{
		header("location: " . $putanjaAPP . "logout.php");
	}
	
}else{
	
	$izraz=$veza->prepare("select * from fakultet where sifra=:sifra");
	$izraz->execute($_GET);
	$_POST=$izraz->fetch(PDO::FETCH_ASSOC);
	
}

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
		<a href="fakulteti.php"><i style="color: red;" class="fas fa-arrow-alt-circle-left fa-3x"></i></a>
		<h4 style="text-align: center;">Dodavanje fakulteta</h4>

			<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
		  
		  
		  <div class="form-row">
		  	
		    <div class="form-group col-md-4">
		     	<?php if(!isset($greska["naziv"])): ?>
						  <label>Naziv (kratko)
						    <input class="form-control" type="text" id="naziv" name="naziv" placeholder="FERIT"
						    value="<?php echo isset($_POST["naziv"]) ? $_POST["naziv"] : ""; ?>">
						  </label>
						  <?php else: ?>
						   <label class="is-invalid-label">
						    Naziv (kratko)
						    <input type="text"  id="naziv" name="naziv" class="is-invalid-input"  aria-invalid aria-describedby="uuid"
						    value="<?php echo isset($_POST["naziv"]) ? $_POST["naziv"] : ""; ?>" >
						    <span class="form-error is-visible" id="uuid"><?php echo $greska["naziv"]; ?></span>
						  </label>
						  <?php endif; ?>
		     </div>
		     
		    <div class="form-group col-md-4">
		     	<?php if(!isset($greska["puni_naziv"])): ?>
						  <label>Puni naziv Fakulteta
						    <input class="form-control"  type="text" id="puni_naziv" name="puni_naziv" placeholder="Horvat"
						    value="<?php echo isset($_POST["puni_naziv"]) ? $_POST["puni_naziv"] : ""; ?>">
						  </label>
						  <?php else: ?>
						   <label class="is-invalid-label">
						    Puni naziv Fakulteta
						    <input type="text"  id="puni_naziv" name="puni_naziv" class="is-invalid-input"  aria-invalid aria-describedby="uuid"
						    value="<?php echo isset($_POST["puni_naziv"]) ? $_POST["puni_naziv"] : ""; ?>" >
						    <span class="form-error is-visible" id="uuid"><?php echo $greska["puni_naziv"]; ?></span>
						  </label>
						  <?php endif; ?>
		     </div>
		     
		     <div class="form-group col-md-4">
		     	<?php if(!isset($greska["kontakt"])): ?>
						  <label>Kontakt telefon
						    <input class="form-control"  type="text" id="kontakt" name="kontakt" placeholder="091 999 9999"
						    value="<?php echo isset($_POST["kontakt"]) ? $_POST["kontakt"] : ""; ?>">
						  </label>
						  <?php else: ?>
						   <label class="is-invalid-label">
						    Kontakt telefon
						    <input type="text"  id="kontakt" name="kontakt" class="is-invalid-input"  aria-invalid aria-describedby="uuid"
						    value="<?php echo isset($_POST["mobitel"]) ? $_POST["kontakt"] : ""; ?>" >
						    <span class="form-error is-visible" id="uuid"><?php echo $greska["kontakt"]; ?></span>
						  </label>
						  <?php endif; ?>
		     </div>
		     
		       <div class="form-group col-md-4">
		     	<?php if(!isset($greska["drzava"])): ?>
						  <label>Država
						    <input class="form-control"  type="text" id="drzava" name="drzava" placeholder="Hrvatska"
						    value="<?php echo isset($_POST["drzava"]) ? $_POST["drzava"] : ""; ?>">
						  </label>
						  <?php else: ?>
						   <label class="is-invalid-label">
						    Država
						    <input type="text"  id="drzava" name="drzava" class="is-invalid-input"  aria-invalid aria-describedby="uuid"
						    value="<?php echo isset($_POST["drzava"]) ? $_POST["drzava"] : ""; ?>" >
						    <span class="form-error is-visible" id="uuid"><?php echo $greska["drzava"]; ?></span>
						  </label>
						  <?php endif; ?>
		     </div>
		     
		     <div class="form-group col-md-4">
		     	<?php if(!isset($greska["grad"])): ?>
						  <label>Grad
						    <input class="form-control"  type="grad" id="grad" name="grad" placeholder="Zagreb"
						    value="<?php echo isset($_POST["grad"]) ? $_POST["grad"] : ""; ?>">
						  </label>
						  <?php else: ?>
						   <label class="is-invalid-label">
						    Grad
						    <input type="text"  id="grad" name="grad" class="is-invalid-input"  aria-invalid aria-describedby="uuid"
						    value="<?php echo isset($_POST["grad"]) ? $_POST["grad"] : ""; ?>" >
						    <span class="form-error is-visible" id="uuid"><?php echo $greska["grad"]; ?></span>
						  </label>
						  <?php endif; ?>
		     </div>
		     
		     </div>  
		     <input type="hidden" name="sifra" value="<?php echo $_POST["sifra"]; ?>"></input>
		      <p><input type="submit" class="btn btn-primary btn-modify button expanded" value="Dodaj Fakultet"></input></p>
		</form>			
	</div>
	
	</div><!-- END container-wrap -->

	<?php include_once "../../template/podnozje.php"; ?>
	</div>

	<?php include_once "../../template/skripte.php"; ?>
	<script>
		
		<?php if(isset($greska["naziv"])):?>	
    		setTimeout(function(){ $("#naziv").focus(); },1000);	
    <?php elseif(isset($greska["puni_naziv"])):?>	
	    		setTimeout(function(){ $("#puni_naziv").focus(); },1000);	
	<?php elseif(isset($greska["kontakt"])):?>	
	    		setTimeout(function(){ $("#kontakt").focus(); },1000);	
	<?php elseif(isset($greska["drzava"])):?>	
	    		setTimeout(function(){ $("#drzava").focus(); },1000);	
	<?php elseif(isset($greska["grad"])):?>	
	    		setTimeout(function(){ $("#grad").focus(); },1000);	

	<?php endif; ?>
		
	</script>
	</body>

</html>

