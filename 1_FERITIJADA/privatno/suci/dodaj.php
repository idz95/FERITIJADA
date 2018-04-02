<?php include_once '../../konfiguracija.php'; 
provjeraOvlasti();

$greska=array();

if($_POST){
	include_once 'kontrole.php';
	
	
	if(count($greska)==0){
		unset($_POST["sifra"]);
		$izraz=$veza->prepare("insert into sudac (ime, prezime, email, lozinka, mobitel, sport) 
							values (:ime, :prezime, :email, md5(:lozinka), :mobitel, :sport);");
		$izraz->execute($_POST);
		header("location: suci.php");
	}
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
		<a href="suci.php"><i style="color: red;" class="fas fa-arrow-alt-circle-left fa-3x"></i></a>
		<h4 style="text-align: center;">Dodavanje suca!</h4>

			<form action="" method="post">
		  
		  
		  <div class="form-row">
		  	
		    <div class="form-group col-md-4">
		     	<?php if(!isset($greska["ime"])): ?>
						  <label>Ime
						    <input class="form-control" type="text" id="ime" name="ime" placeholder="Ivan"
						    value="<?php echo isset($_POST["ime"]) ? $_POST["ime"] : ""; ?>">
						  </label>
						  <?php else: ?>
						   <label class="is-invalid-label">
						    Ime
						    <input type="text"  id="ime" name="ime" class="is-invalid-input"  aria-invalid aria-describedby="uuid"
						    value="<?php echo isset($_POST["ime"]) ? $_POST["ime"] : ""; ?>" >
						    <span class="form-error is-visible" id="uuid"><?php echo $greska["ime"]; ?></span>
						  </label>
						  <?php endif; ?>
		     </div>
		     
		    <div class="form-group col-md-4">
		     	<?php if(!isset($greska["prezime"])): ?>
						  <label>Prezime
						    <input class="form-control"  type="text" id="prezime" name="prezime" placeholder="Horvat"
						    value="<?php echo isset($_POST["prezime"]) ? $_POST["prezime"] : ""; ?>">
						  </label>
						  <?php else: ?>
						   <label class="is-invalid-label">
						    Prezime
						    <input type="text"  id="prezime" name="prezime" class="is-invalid-input"  aria-invalid aria-describedby="uuid"
						    value="<?php echo isset($_POST["prezime"]) ? $_POST["prezime"] : ""; ?>" >
						    <span class="form-error is-visible" id="uuid"><?php echo $greska["prezime"]; ?></span>
						  </label>
						  <?php endif; ?>
		     </div>
		     
		     <div class="form-group col-md-4">
		     	<?php if(!isset($greska["email"])): ?>
						  <label>Email adresa
						    <input class="form-control"  type="email" id="email" name="email" placeholder="primjer@hns.hr"
						    value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ""; ?>">
						  </label>
						  <?php else: ?>
						   <label class="is-invalid-label">
						    Email adresa
						    <input type="email"  id="email" name="email" class="is-invalid-input"  aria-invalid aria-describedby="uuid"
						    value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ""; ?>" >
						    <span class="form-error is-visible" id="uuid"><?php echo $greska["email"]; ?></span>
						  </label>
						  <?php endif; ?>
		     </div>
		     
		    
		     
		      <div class="form-group col-md-4">
		     	<?php if(!isset($greska["email"])): ?>
						  <label>Lozinka
						    <input class="form-control"  type="text" id="lozinka" name="lozinka" placeholder="Lozinka"
						    value="<?php echo isset($_POST["lozinka"]) ? $_POST["lozinka"] : ""; ?>">
						  </label>
						  <?php else: ?>
						   <label class="is-invalid-label">
						    Lozinka
						    <input type="text"  id="lozinka" name="lozinka" class="is-invalid-input"  aria-invalid aria-describedby="uuid"
						    value="<?php echo isset($_POST["lozinka"]) ? $_POST["lozinka"] : ""; ?>" >
						    <span class="form-error is-visible" id="uuid"><?php echo $greska["lozinka"]; ?></span>
						  </label>
						  <?php endif; ?>
		     </div>
		     
		      <div class="form-group col-md-4">
		     	<?php if(!isset($greska["mobitel"])): ?>
						  <label>Kontakt telefon
						    <input class="form-control"  type="text" id="mobitel" name="mobitel" placeholder="091 999 9999"
						    value="<?php echo isset($_POST["mobitel"]) ? $_POST["mobitel"] : ""; ?>">
						  </label>
						  <?php else: ?>
						   <label class="is-invalid-label">
						    Kontakt telefon
						    <input type="text"  id="mobitel" name="mobitel" class="is-invalid-input"  aria-invalid aria-describedby="uuid"
						    value="<?php echo isset($_POST["mobitel"]) ? $_POST["mobitel"] : ""; ?>" >
						    <span class="form-error is-visible" id="uuid"><?php echo $greska["mobitel"]; ?></span>
						  </label>
						  <?php endif; ?>
		     </div>
		     
		    
		    
		     
		     <div class="form-group col-md-4">
		     <label for="sport">Sport
				  <select class="form-control" name="sport" id="sport">
						  	<?php 		
									$izraz = $veza->prepare("select * from sport order by naziv");
									$izraz->execute();
									$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
									foreach ($rezultati as $red):
									?>  	
								  <option
								  <?php 
								  if(isset($_POST["sport"]) && $_POST["sport"]==$red->sifra){
								  	echo "selected=\"selected\"";
								  }
								  ?>
								   value="<?php echo $red->naziv ?>"><?php echo $red->naziv ?></option>  
						<?php endforeach;?>
				  </select>
				  </label>
		      </div>   
		     </div>  
		      <p><input type="submit" class="btn btn-primary btn-modify button expanded" value="Dodaj suca"></input></p>
		</form>			
	</div>
	
	</div><!-- END container-wrap -->

	<?php include_once "../../template/podnozje.php"; ?>
	</div>

	<?php include_once "../../template/skripte.php"; ?>
	<script>
		
		<?php if(isset($greska["ime"])):?>	
    		setTimeout(function(){ $("#ime").focus(); },1000);	
    <?php elseif(isset($greska["prezime"])):?>	
	    		setTimeout(function(){ $("#prezime").focus(); },1000);	
	<?php elseif(isset($greska["mobitel"])):?>	
	    		setTimeout(function(){ $("#mobitel").focus(); },1000);	
	<?php elseif(isset($greska["email"])):?>	
	    		setTimeout(function(){ $("#email").focus(); },1000);	
	<?php elseif(isset($greska["lozinka"])):?>	
	    		setTimeout(function(){ $("#lozinka").focus(); },1000);	

	<?php endif; ?>
		
	</script>
	</body>

</html>

