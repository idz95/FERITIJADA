<div class="grid-x grid-padding-x">
	<div class="large-2 cell">
	</div>
	<div class="large-8 cell">
	 
	</div>
	<div class="large-2 cell">
		<?php if(!isset($_SESSION["autoriziran"])): ?>
	  		<a href="<?php echo $putanjaAPP; ?>prijava.php" class="button">Prijava</a>
	  	<?php else: ?>
	  		<a href="<?php echo $putanjaAPP; ?>logout.php" class="button">Odjava</a>
	  	<?php endif;?>
	</div>
</div>