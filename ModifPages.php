<?php

include_once "Fonctions.php";
// check_gestionnaire();
check_connected();

    if( !empty($_POST['Type'])&&!empty($_POST['Titre']))
    {
      //1) on récupère les données via des post et des variables 
      $Titre=$_POST['Titre'];
      $Type=$_POST['Type'];
      $DateDebut=$_POST['DateDebut'];
      $DateFin=$_POST['DateFin'];
      $Localisation=$_POST['Localisation'];
      $Description=$_POST['Description'];
      $Lien=$_POST['Lien'];
      $LienImg=$_POST['LienImg'];
    
    
      $req =$bdd->prepare(
            "INSERT INTO `pages`(
                
                `Titre`,
                `Type`, 
                `DateDebut`, 
                `DateFin`, 
                `Localisation`, 
                `Description`, 
                `Lien`, 
                `LienImg` 
            ) VALUES ( ?,?,?,?,?,?,?,?)");
            
                    
        $req->execute(array(
            $Titre,
            $Type,
            $DateDebut,
            $DateFin,
            $Localisation,
            $Description,
            $Lien,
            $LienImg,
            ));
            
    }

?>


  <!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Admin des pages</title>
        <link rel = "stylesheet" href = "stylesheet.css"/>
    </head>
    <body>
       
            <div class = "contenant">

                <div class = "titre">
                <h1 ><br>PUBLIER</h1>
                </div>
                <br/>
                <br/>
                
                <form method="POST" action="ModifPages.php" class ="cadre"> 
                    

                    <label for="Titre">Intitulé de l'expérience :</label> 
                    <input type="text" name="Titre" required/> <br/>
                    <br/>

                    Type  :<br/> 
                   
                                    <input type="radio" name="Type" id="experience"  value="0"required/> 
                                    <label for= "experiences">Expérience</label> 
                                    <input type ="radio" name="Type" id="formations" value ="1" required/> 
                                    <label for= "formations" >Formation</label> <br/>
                                    <br/>
                    

                    <label for="DateDebut">Date de début :</label>
                    <input placeholder = "JJ/MM/AA" type="date" name="DateDebut" required/> <br/>
                    <br/>

                    <label for="DateFin">Date de fin :</label>
                    <input placeholder = "JJ/MM/AA" type="date" name="DateFin"/> <br/>
                    <br/> 
                                    
                    <label for="Localisation">Localisation</label> 
                    <input type="text" name="Localisation"/> <br/>
                    <br/>

                    <label for="Description">Description :</label> 
                    <textarea  name="Description"></textarea> <br/>
                    <br/>
                                       
                                                 
                    <label for="Lien">Lien</label> 
                    <textarea  name="Lien"></textarea> <br/>
                    <br/>

                    <label for="LienImg">Lien Image</label> 
                    <textarea  name="LienImg"></textarea> <br/>
                    <br/>
                            
                    <input class = "Ajout" type="submit" value="Publier"/>
                    
                    <div class="button">
                        <a href="ModifProjet.php">Acceder aux projets</a>
                        <!-- <button  href= "ModifProjet.php" placeholder ="Ajouter un projet">    -->
                    </div>                   
                </form>

                
            </div>
        </div>
    </body>
</html>
