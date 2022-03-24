<?php
// Sous WAMP
try
{
$bdd = new PDO(
    'mysql:host=localhost;dbname=pii;charset=utf8',
    'root',
    ''

}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}



// function check_connected(){
// 	if (!isset($_SESSION['identifiant'])) {
// 		//header('Location: Info.php');

// 	}
// }

// if (isset($_SESSION['identifiant'])) {
// 	$query = $bdd->prepare('SELECT * FROM utilisateur WHERE Id_Utilisateur = ?');
// 	$query->execute([$_SESSION['identifiant']]);
// 	$connected_user = $query->fetch();
// }


//--------------------TO DO -------------------------------------------------
// function check_gestionnaire() {  // TRANSFORMER EN CHECK TYPE (EXPERIENCES OU FORMATIONS)
// 	check_connected();
// 	if ($_SESSION['statut'] != 1) {
// 		return false;
// 	}
// 	else { return true; }
// }

?>