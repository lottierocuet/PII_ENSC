<?php

include_once "Fonctions.php";
check_connected();
$error=null;
if (!empty($_GET['Id_User']) and !empty($_GET['Mdp']) ) {
    //On met le post Id_User dans la variable $Id_User
    $Id_User = $_GET['Id_User'];
    //On met le post Mdp dans la variable $Mdp
    $Mdp = $_GET['Mdp'];
    $stmt = $bdd->prepare('SELECT * FROM Utilisateur WHERE Id_User = Lottie and Mdp=piiensc2022');
    $stmt->execute(array($Id_User, $Mdp));
    $res = $stmt->fetch();

    if (isset($_SESSION['Id_User'])) {
            $_SESSION['Id_User'] = $Id_User;
            header ('ModifPages.php');
        }
        else {
            $error = "Utilisateur non reconnu ou non autorisé";
        }
 
}


?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Accueil seulement pour Lolo</title>
        <link rel = "stylesheet" href = "stylesheet.css"/>
    </head>
    <body>
    <div class ="contenant">
        <div class = "fond">
        <img class ="fond" src="images/fond.png" alt="image">
        </div>
                   
            <div class = "presentation">
                <h1 >Bienvenue sur ma page perso pour modifier mes pages</h1>
                
                <?php if ($error) { ?> 
                    <div class="alert alert-danger">
                        <?= $error ?>
                    </div>
                <?php } ?>
                <form method="post" action="?" class ="cadre"> <!--Commence le formulaire et affiche le cadre-->
                    <p>
                        <strong>Rentre tes identifiants bg : </strong> <br/>
                        <br/>
                        <div class = "row">
                            <div class = "col-xl-6 col-12">
                                <input placeholder="Identifiant" type="text" name="Id_User" required/> <br/>
                                <br/>
                                <input placeholder = "Mot de Passe" type="password" name="Mdp" required/> <br/>
                                <br/>
                                <!--Permet de rentrer ses infos de connexion-->
                            </div>
                            
                        </div>
                        <input class = "inscription" type="submit" value="Se connecter"/>
                        <?php header ('Experiences.php'); ?>
                    </p>
                </form>
                
            </div>
     </div>
    </body>
</html>
