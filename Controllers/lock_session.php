<?php
	//code de securité au cas l'	dmin se deconnecte                                                
	if(empty($_SESSION['login'])) 
	  {
		// Si inexistante ou nulle, on redirige vers le formulaire de login
		header(''.$_SERVER ['DOCUMENT_ROOT'].'/PHARMACIE/index.php');
		exit();
	  }

?>