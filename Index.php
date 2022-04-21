<?php

include_once "Fonctions.php";

$error=null;

if (!empty($_POST['Id_User']) && !empty($_POST['Mdp']) ) 
{

    //On met le post Id_User dans la variable $Id_User
    $Id_User = $_POST['Id_User'];
    //On met le post Mdp dans la variable $Mdp
    $Mdp = $_POST['Mdp'];

    



    $stmt = $bdd->prepare('SELECT COUNT(*) AS nb FROM utilisateur WHERE Id_User = ? and mdp=?');
    // Verifier que le couple id et mdp existe dans la bdd 
    //Pas besoin de vérifier que ce qu'on recoit du formulaire soit totalement égale au contenu de la bdd

    $stmt->execute(array($Id_User, $Mdp));
    $res = $stmt->fetch();

    if ($res['nb']==1)
    {
        $_SESSION['Id_User'] = $Id_User;
        
        
        header ('Location: Experiences.php');        
        

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
                           
            <div class = "presentation">
                <h1 >Bienvenue sur ma page perso pour modifier mes pages</h1>
                
                <?php if ($error) { ?> 
                    <div class="alert alert-danger">
                        <?= $error ?>
                    </div>
                <?php } ?>
                <!--Commence le formulaire et affiche le cadre-->
                <form method="post" action="Index.php" class ="cadre">   
                
                <p>
                        <strong>Rentre tes identifiants bg : </strong> <br/>
                        <br/>
                        <div class = "row">
                            <div class = "col-xl-6 col-12">
                                <input placeholder="Identifiant" type="text" name="Id_User" required/> 
                                <br/>
                                <br/>
                                <input placeholder = "Mot de Passe" type="password" name="Mdp" required/> <br/>
                                <br/>
                                <!--Permet de rentrer ses infos de connexion-->
                            </div>
                            
                        </div>
                        <input class = "inscription" type="submit" value="Se connecter"/>
                    </p>
                </form>
                
                
            </div>
     </div>
    </body>
</html>
