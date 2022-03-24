<?php

    $bdd = new PDO(
    'mysql:host=localhost;dbname=pii;charset=utf8',
    'root',
    ''
    );    
      
function check_connected(){
    if(!isset($_SESSION['Id_User'])){

    }
}

$error = null;


if (isset($_SESSION['Id_User'])) {
	$query = $bdd->prepare('SELECT * FROM Utilisateur WHERE Id_User = Lottie');
	$query->execute([$_SESSION['Id_User']]);
	$connected_user = $query->fetch();
}


// --------------------TO DO -------------------------------------------------
function check_type() {  // FINIR FONCTION (EXPERIENCES OU FORMATIONS)
	check_connected();
	if ($_type['Type'] != 1) {
		return false;
	}
	else { return true; }
}

?>