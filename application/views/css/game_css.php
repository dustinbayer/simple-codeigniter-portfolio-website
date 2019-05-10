<!--------------------------------------------------------------------
! GAME CSS
!-------------------------------------------------------------------->

<style type="text/css">

<?php 	
 	echo '.grid-container { display: grid; grid-template-columns:'; 
	for($i = 0; $i < $grid_size; $i++) 	{
		echo ' auto';
	}
	echo '; background-color: #A3A991; }';
?>

    .grid-item {
	    background-color: rgba(255, 255, 255, 0);
	    border: 1px solid #34372C;
	    text-align: center;
	}
	
	.grid-item-content {
		width: 100%;
		height: 0;
		padding-bottom: 100%; 
	}

</style>