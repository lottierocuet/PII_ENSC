<?php

  include_once "Fonctions.php";


  //dateUS_toFR();
  
  // VERIFIER LACCES EN TANT QU'ADMIN OU VISITEUR
  check_connected();

   
  // AFFICHER LES EXPERIENCES
  $req = $bdd->query('SELECT * FROM pages  WHERE pages.Type = 0 ');


  // MODIFIER UNE PAGE
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


    $req =$bdd->prepare("UPDATE 'pages'
      SET
      `Titre`=:Titre,
      `Type`=:Titre, 
      `DateDebut`=:DateDebut, 
      `DateFin`=:DateFin, 
      `Localisation`=:Localisation, 
      `Description`=:Description, 
      `Lien`=:Lien, 
      `LienImg`=:LienImg 
      ");
    
                  
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


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Expérience</title>
  <link rel="stylesheet" href="stylesheet.css">
  <!-- <script src="script.js"></script> -->

 
</head>  

<!-- =============================Présentation générale du site===================================== -->
 

<body>
  <div class = "titre">
      <h1> EXPERIENCES </h1>
    </div>
  <div class ="contenant">
    
    <!-- =============================Présentation générale du site===================================== -->
    <div class = "presentation">  
      <h2>Lottie Rocuet Portfolio</h2>
        Bonjour à tous je suis la présidente du club poulpyboule, bien venu à vous dans mon Portfolio
    </div> 

    
    
    <!--========================= Permet d'afficher toutes les expériences ========================= -->
    
      <?php foreach ($req as $result) { ?>
      <div class="experiences">    
	
        <?php
        echo $result["DateDebut"];?> 
        -
        <?php echo $result["DateFin"];
        ?>

          <h2>
          <strong>
            <?php echo $result["Titre"]?> 
          </strong> - 
            <?php echo $result["Localisation"]?>
          </h2>
        
        
            <?php echo $result["Description"]?> 
      </div>  

      

        <div class="lien">
          
          <img src="images/supprimer.png"alt="Lien vers site externe"/>     
          

          
          <img src="images/modifier.png"alt="Lien vers site externe"/>     
          

          <a href=<?= $result['Lien'] ?> target="_blank">
          <img src="images/link.png"alt="Lien vers site externe"/>     
          </a>
          </div>

      
      <?php }?>


      <!-- Faire if php ==> Si connectée s'affiche sinon non -->
      
        <?php if (check_connected()==true) {?>
                        
        
      
      </div  id="ModifPages">
                <h1 >Publier une expérience ou une formation</h1>
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
                                            
                </form>

                <div class="button">
                <a href="ModifProjet.php">Acceder aux projets</a>
                <!-- <button  href= "ModifProjet.php" placeholder ="Ajouter un projet">    -->
                </div>
            </div>
    
            <?php } ?>  
          
  </div>
</body>
</html>