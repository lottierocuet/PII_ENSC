<?php

    $bdd = new PDO(
    'mysql:host=localhost;dbname=pii;charset=utf8',
    'root',
    ''
    );    
	// activation des erreurs PDO
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
function check_connected(){
    if(!isset($_SESSION['Id_User'])){

    }
}


$error = null;
$Type=null;

if (isset($_SESSION['Id_User'])) {
	$query = $bdd->prepare('SELECT * FROM Utilisateur WHERE Id_User = Lottie');
	$query->execute([$_SESSION['Id_User']]);
	$connected_user = $query->fetch();
}

/* Traduit une date au format US vers le format FR */
function dateUS_toFR($dateUS)
	{	
		list($annee, $mois, $jour) = split('[-.]', $dateUS);
		$dateFR=$jour."/".$mois."/".$annee;
		return $dateFR;
	}


// --------------------TO DO -------------------------------------------------
// function check_type() {  // FINIR FONCTION (EXPERIENCES OU FORMATIONS)
// 	check_connected();
// 	if ($Type['Type'] != 1) {
// 		return false;//Si type =1 alors c'est une formation
// 	}
// 	else { return true; }
//     $id =$_SESSION['identifiant'];
//     $query = $bdd->prepare("SELECT * FROM utilisateur, elève  WHERE utilisateur.Id_Utilisateur = ? ");
//     $query -> execute(array($id));
//     $ligne= $query->fetch()
// }

?>