<?php
// Sous WAMP

// try{
    $bdd = new PDO(
    'mysql:host=localhost;dbname=pii;charset=utf8',
    'root',
    ''
    )      
// }
// catch (Exception $e)
// {
//         die('Erreur : ' . $e->getMessage());
// }

function check_connected(){
	if (!isset($_SESSION['Id_User'])) {
		

	}
}

$error = null;
if (!empty($_GET['Id_User']) and !empty($_GET['Mdp'])) {
    //On met le post identifiant dans la variable $identifiant
    $identifiant = $_GET['Id_User'];
    //On met le GET mdp dans la variable $mdp
    $mdp = $_GET['Mdp'];
    $req = $bdd->prepare('select * from utilisateur where Id_Utilisateur=Lottie and Mot_de_passe=piiensc2022 ');
    $req->execute(array($identifiant,$mdp));

  if ($req->rowCount() == 1) 
    {
        // Authentication successfuls
        $_SESSION['identifiant'] = $identifiant;
        header ('Experiences.php');
    }
    else {
        $error = "Utilisateur non reconnu ou non autorisé";
    }
}

$id =$_SESSION['Id_User'];
    $query = $bdd->prepare("SELECT * FROM Utilisateur WHERE Utilisateur.Id_User =piiensc2022 ");
    $query -> execute(array($id));
    $ligne= $query->fetch()

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