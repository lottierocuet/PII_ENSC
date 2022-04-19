<?php

include_once "Fonctions.php";
// check_gestionnaire();
check_connected();

    if( !empty($_POST['Titre']) && !empty($_POST['Description'])&&!empty($_POST['CodHexTypo']))
    {
      //1) on récupère les données via des post et des variables 
      $Titre=$_POST['Titre'];
      $Contexte=$_POST['Contexte'];
      $Description=$_POST['Description'];
      $DateDebut=$_POST['DateDebut'];
      $DateFin=$_POST['DateFin'];
      $Lien=$_POST['Lien'];
      $LienImg=$_POST['LienImg'];
      $CodHexTypo=$_POST['CodeHexTypo'];

    
    
      $req =$bdd->prepare(
            "INSERT INTO `projets`( 
                `Titre`, 
                `Contexte`, 
                `Description`,
                `DateDebut`, 
                `DateFin`, 
                `Lien`,
                `LienImgFond`,
                `CodHexTypo`
                
            )VALUES ( ?,?,?,?,?,?,?,?)");
            
                    
        $req->execute(array(
            $Titre,
            $Contexte,
            $Description,
            $DateDebut,
            $DateFin,
            $Lien,
            $LienImg,
            $CodHexTypo,
        ));
            
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
            <h1 >PUBLIER UN PROJET</h1>
            </div>
                <br/>
                <br/>
                <form method="post" action="ModifProjet.php" class ="cadre"> <!-- Commence le formulaire et affiche le cadre-->
                    <label for="Titre">Intitulé du Projet :</label> 
                    <br/>
                    <input type="text" name="Titre" required/> <br/>
                    <br/><br/>

                    <label for="Contexte">Contexte :</label> 
                    <br/>
                    <textarea  name="Contexte"></textarea> <br/>
                    <br/><br/>

                    <label for="Description">Description :</label> 
                    <br/>
                    <textarea  name="Description"></textarea> <br/>
                    <br/><br/>

                    <label for="DateDebut">Date de début :</label>
                    <br/>
                    <input placeholder = "JJ/MM/AA" type="date" name="DateDebut" required/> <br/>
                    <br/><br/>

                    <label for="DateFin">Date de fin :</label><br/>
                    <input placeholder = "JJ/MM/AA" type="date" name="DateFin"/> <br/>
                    <br/><br/>                   
                                                 
                    <label for="Lien">Lien</label> 
                    <br/>
                    <textarea  name="Lien"></textarea> <br/>
                    <br/><br/>

                    <label for="LienImg">Lien Image</label> 
                    <br/>
                    <textarea  name="LienImg"></textarea> <br/>
                    <br/><br/>

                    <label for="CodHexTypo">Couleur de la typo</label> 
                    <br/> 
                    <input  type="color" />
                    <br/><br/>
                            
                    <input class = "Ajout" type="submit" value="Publier"/>
                                            
                </form>

                <div class="button">
                <a href="ModifPages.php">Acceder aux pages</a>
                </div>
            </div>
        </div>
    </body>
</html>
