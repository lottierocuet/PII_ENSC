<!-- Tout faire en html mais gérer le formulaire pop up en css puis gerer le js qui modifiera le css  -->
<?php
include_once "Fonctions.php";
// check_gestionnaire();
// check_connected();
    if(!empty($_POST['Id_Projets']) && !empty($_POST['Type'])) 
    {
      //1) on récupère les données via des post et des variables 
      $Titre=$_POST['Titre'];
      $Contexte=$_POST['Contexte'];
      $DateDebut=$_POST['DateDebut'];
      $DateFin=$_POST['DateFin'];
      $Localistaion=$_POST['Localisation'];
      $Description=$_POST['Description'];
      $Lien=$_POST['Lien'];
      $LienImg=$_POST['LienImg'];
      $CodHexTypo=$_POST['CodeHexTypo'];

    //   `Id_Projets`, `Titre`, `DateDebut`, `DateFin`, `Contexte`, `Description`, 
    //   `CodHexTypo`, `LienImgFond`, `Lien`, `Id_User'
     
        // insert expérience into BD
        //$stmt = $bdd->prepare('select * from utilisateur where Id_Utilisateur=? and Mot_de_passe=?');
        $req =$bdd->prepare('INSERT INTO projets (
            Titre,
            Contexte,
            DateDebut,
            DateFin,
            Description, 
            Lien,
            LienImg
            CodeHexTypo
                )VALUES (:Titre, :Contexte, :DateDebut, :DateFin, :Localisation, :Description, :Lien, :LienImg, :CodeHexTypo)');
$req=$req->execute(array(
      'Titre'=>$Titre,
      'Contexte'=>$Contexte,
      'DateDebut'=>$DateDebut,
      'DateFin'=>$DateFin,
      'Description'=>$Description,
      'Lien'=>$Lien,
      'LienImg'=>$LienImg,
      'CodeHexTypo'=>$CodHexTypo,
        ));
        header("Location: ModifProjet.php");
    }
    ?>
  <!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Admin des Projets</title>
        <link rel = "stylesheet" href = "stylesheet.css"/>
    </head>
    <body>
       
            <div class = "contenant">

            <div class = "titre">
            <h1> ADMIN </h1>
            </div>
                <h1 >Publier un projet</h1>
                <br/>
                <br/>
                <form method="post" action="ModifPages.php" class ="cadre"> <!-- Commence le formulaire et affiche le cadre-->
                    <label for="Titre">Intitulé du Projet :</label> 
                    <br/>
                    <input type="text" name="Titre" required/> <br/>
                    <br/><br/>

                    <label for="Contexte">Contexte :</label> 
                    <br/>
                    <textarea  name="Contexte"></textarea> <br/>
                    <br/><br/>

                    <label for="DateDebut">Date de début :</label>
                    <br/>
                    <input placeholder = "JJ/MM/AA" type="text" name="DateDebut" required/> <br/>
                    <br/><br/>

                    <label for="DateFin">Date de fin :</label><br/>
                    <input placeholder = "JJ/MM/AA" type="text" name="DateFin"/> <br/>
                    <br/><br/>                   
                                                 
                    <label for="Lien">Lien</label> 
                    <br/>
                    <textarea  name="Lien"></textarea> <br/>
                    <br/><br/>

                    <label for="LienImg">Lien Image</label> 
                    <br/>
                    <textarea  name="LienImg"></textarea> <br/>
                    <br/><br/>

                    <label for="CodeHexTypo">Code Hexadécimal de la couleur de la typo</label> 
                    <br/> Ne pas oublier le # devant ! <br/>
                    <input  type="text" />
                    <br/><br/>
                            
                    <input class = "Ajout" type="submit" value="Publier"/>
                                            
                </form>

                <div class="button">
                <a href="ModifProjet.php">Acceder aux pages</a>
                </div>
            </div>
        </div>
    </body>
</html>
