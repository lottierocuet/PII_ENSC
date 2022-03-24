<?php
session_start();
include_once "Fonctions.php";
check_connected();
$error=null;
if (!empty($_POST['Id_User']) and !empty($_POST['Mdp']) ) {
    //On met le post Id_User dans la variable $Id_User
    $Id_User = $_POST['Id_User'];
    //On met le post Mdp dans la variable $Mdp
    $Mdp = $_POST['Mdp'];
    $stmt = $bdd->prepare('select * from utilisateur where Id_Utilisateur=Lottie and Mot_de_passe=piiensc2022');
    $stmt->execute(array($Id_User, $Mdp));
    $res = $stmt->fetch();
 else {
        $error = "Utilisateur non reconnu";
    }
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Accueil seulement pour Lolo</title>
        <link rel = "stylesheet" href = "style_general.css"/>
    </head>
    <body>
        <div class = "row"> <!--Création d'une ligne où la navbar et le reste sont côtes à côtes-->
            
            <div class = "col-9">
                <h1 >Bienvenue sur ma page perso pour modifier mes pages</h1>
                
                <?php if ($error) { ?> 
                    <div class="alert alert-danger">
                        <?= $error ?>
                    </div>
                <?php } ?>
                <form method="post" action="?" class ="cadre"> <!--Commence le formulaire et affiche le cadre-->
                    <p>
                        Je suis bien Lolo <br/>
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
                    </p>
                </form>
                
            </div>
    </body>
</html>
