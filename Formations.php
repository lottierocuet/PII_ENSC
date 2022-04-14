<?php

include_once "Fonctions.php";
//dateUS_toFR();
// check_connected();
// session_start();
    

    $req = $bdd->query('SELECT * FROM pages  WHERE pages.Type = 1 ');

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
  <title>Formations</title>
  <link rel="stylesheet" href="stylesheet.css">
  <!-- <script src="script.js"></script> -->

 
</head>  

<body>
  
<div class = "titre">
      <h1> FORMATIONS </h1>
    </div>
  <div class ="contenant">
  <!-- Présentation générale de la page ===================================== -->
    



    

    
    
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
        
        <div class="lien">
            <a href=<?= $result['Lien'] ?> target="_blank">
        <img src="images/link.png"alt="Lien vers site externe"/>     
        </a>
        </div>

      </div>
      <?php }?>
    
           
          
  </div>
</body>
</html>