<!--------------------------------------------------------------------
! GAME CONTENT
!-------------------------------------------------------------------->

<h1>Dawn of the Emu</h1>

<div class="grid-container">

<?php 
	for ($i = 0; $i < ($grid_size ** 2); $i++) {
 		echo '<div class="grid-item">
 	<div class="grid-item-content" id="grid-item-';
 		echo $i;
 		echo '"></div>
 	</div>';
 	}
?>
	
</div>

<a href="<?php echo base_url('') ?>" class="button">Return</a>