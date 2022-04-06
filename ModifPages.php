<!-- Tout faire en html mais gérer le formulaire pop up en css puis gerer le js qui modifiera le css  -->
<?php
include_once "Fonctions.php";
// check_gestionnaire();
// check_connected();
    if(!empty($_POST['Id_Pages']) && !empty($_POST['Type'])) 
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
      
     
        // insert expérience into BD
        //$stmt = $bdd->prepare('select * from utilisateur where Id_Utilisateur=? and Mot_de_passe=?');
        $req =$bdd->prepare("INSERT INTO 'pages' (
            'Titre',
            'Type',
            'DateDebut',
            'DateFin',
            'Localisation',
            'Description', 
            'Lien',
            'LienImg'
                )VALUES (:Titre, :DateDebut, :DateFin, :Localisation, :Description, :Lien, :LienImg)");
        
        $req=$req->execute(array(
            'Titre'=>$Titre,
            'Type'=>$Type,
            'DateDebut'=>$DateDebut,
            'DateFin'=>$DateFin,
            'Description'=>$Description,
            'Lien'=>$Lien,
            'LienImg'=>$LienImg
            ));
            header("Location: ModifProjet.php");
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
            <h1> ADMIN </h1>
            </div>
                <h1 >Publier une expérience ou une formation</h1>
                <br/>
                <br/>
                <form method="post" action="ModifPages.php" class ="cadre"> <!-- Commence le formulaire et affiche le cadre-->
                    <label for="Id_Pages">Id de la page :</label> 
                    <input type="text" name="Id_Pages" required/> <br/>
                    <br/>    

                    <label for="Titre">Intitulé de l'expérience :</label> 
                    <input type="text" name="Titre" required/> <br/>
                    <br/>
                                    
                    <label for="Localisation">Localisation</label> 
                    <input type="text" name="Localisation"/> <br/>
                    <br/>
                    <label for="Description">Description :</label> 
                    <textarea  name="Description"></textarea> <br/>
                    <br/>
                    <label for="DateDebut">Date de début :</label>
                    <input placeholder = "JJ/MM/AA" type="text" name="DateDebut" required/> <br/>
                    <br/>
                    <label for="DateFin">Date de fin :</label>
                    <input placeholder = "JJ/MM/AA" type="text" name="DateFin"/> <br/>
                    <br/>
                    Type  :<br/>
                                    <input type="radio" name="Type" id="experience"  value="0"required/> 
                                    <label for= "experiences">Expérience</label> 
                                    <input type ="radio" name="Type" id="formations" value ="1" required/> 
                                    <label for= "formations" >Formation</label> <br/>
                                    <br/>
                    
                                                 
                    <label for="Lien">Lien</label> 
                    <textarea  name="Lien"></textarea> <br/>
                    <br/>
                    <label for="LienImg">Lien Image</label> 
                    <textarea  name="LienImg"></textarea> <br/>
                    <br/>
                            
                    <input class = "Ajout" type="submit" value="Publier"/>
                                            
                </form>

                <div class="button">
                <a href="ModifProjet.php">Acceder aux projets</a>
                <!-- <button  href= "ModifProjet.php" placeholder ="Ajouter un projet">    -->
                </div>
            </div>
        </div>
    </body>
</html>
