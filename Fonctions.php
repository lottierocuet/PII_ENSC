<?php


	// CONNEXION A LA BDD
    $bdd = new PDO(
    'mysql:host=localhost;dbname=pii;charset=utf8',
    'root',
    ''
    );    

	// activation des erreurs PDO
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
	
	// VERIFIE SI L'UTILISATEUR EST CONNECTE EN TANT QU'ADMIN 
	function check_connected()
	{
		if(!isset($_SESSION['Id_User']))
		{
			return false;//false
			
		}
		else{

			return true;//SI sur false c'est un test
			$_SESSION['Id_User'] = $Id_User;
						
			
		}

	}


	$error = null;
	$Type=null;





?>