<nav class="fh5co-nav" role="navigation">
		<div class="container-wrap"">
			<div class="top-menu">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="<?php echo $putanjaAPP; ?>index.php"">FERITijada</a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<?php //poziv funkcije koja je definirana u /Edunova05/funkcije.php:4
							stavkaIzbornika($putanjaAPP . "index.php", "Naslovnica");
 							?>
 						
      							<?php stavkaIzbornika($putanjaAPP."kontakt.php", "Kontakt"); ?>
      							
      							
      							
						      		
									<li class="has-dropdown">
										<a href="<?php echo $putanjaAPP; ?>sportovi.php">Sportovi</a>
										<ul class="dropdown">
											<?php 
												stavkaIzbornika($putanjaAPP . "sportovi/nogomet.php", "Nogomet"); 
												stavkaIzbornika($putanjaAPP . "sportovi/rukomet.php", "Rukomet"); 
												stavkaIzbornika($putanjaAPP . "sportovi/kosarka.php", "Košarka"); 
												stavkaIzbornika($putanjaAPP . "sportovi/odbojka.php", "Odbojka"); 
						
											?>
										</ul>
									</li>
									<?php if(isset($_SESSION[$appID."autoriziran"])): ?>
									<?php stavkaIzbornika($putanjaAPP . "privatno/nadzornaPloca.php", "Nadzorna ploča");?>
									<li class="has-dropdown">
										<a href="<?php echo $putanjaAPP; ?>privatno/profil/profil.php">Moj profil</a>
										<ul class="dropdown">
											<?php 
												stavkaIzbornika($putanjaAPP . "privatno/profil/profil.php", "Profil"); 
												stavkaIzbornika($putanjaAPP . "privatno/profil/profil.php", "Moje utakmice"); 
												stavkaIzbornika($putanjaAPP . "privatno/profil/profil.php", "Korisnički račun"); 
												 
						
											?>
										</ul>
									</li>
									
									<?php endif;
									?>
      							
      							
      			
						      <?php if(!isset($_SESSION[$appID."autoriziran"])): ?>
	  		
							<li><a href="<?php echo $putanjaAPP; ?>prijava.php" >Prijava</a>
							<?php else: ?>
							<li><a href="<?php echo $putanjaAPP; ?>logout.php">Odjava</a>
							<?php endif;?>	
							</li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>