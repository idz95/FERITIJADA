<nav class="fh5co-nav" role="navigation">
		<div class="container-wrap">
			<div class="top-menu">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="index.php">FERITijada</a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li
							<?php
							if ($_SERVER["PHP_SELF"] === $putanjaAPP . "index.php") {
								echo " class=\"active\"";
							}
					      ?>><a href="<?php echo $putanjaAPP; ?>index.php">Naslovnica</a></li>
							<li class="has-dropdown" <?php
							if ($_SERVER["PHP_SELF"] === $putanjaAPP . "sportovi.php") {
								echo " class=\"active\"";
							}
					      ?>>
								<a href="<?php echo $putanjaAPP; ?>sportovi.php">Sportovi</a>
								<ul class="dropdown">
									<li><a href="#">Nogomet</a></li>
									<li><a href="#">Rukomet</a></li>
									<li><a href="#">Košarka</a></li>
									<li><a href="#">Odbojka</a></li>
									<li><a href="#">Veslanje</a></li>
									<li><a href="#">Kros</a></li>
								</ul>
							</li>
							<li
							<?php
								if ($_SERVER["PHP_SELF"] === $putanjaAPP . "kontakt.php") {
									echo " class=\"active\"";
								}
						      ?>><a href="<?php echo $putanjaAPP; ?>kontakt.php">Kontakt</a></li>	
						
						
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>