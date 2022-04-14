<?php

include_once "Fonctions.php";
//dateUS_toFR();
// check_connected();
// session_start();
    

    $req = $bdd->query('SELECT * FROM projets   ');
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Projets</title>
  <link rel="stylesheet" href="stylesheet.css">
  <!-- <script src="script.js"></script> -->

 
</head>  

<body>
  <div class ="contenant">
<div class = "titre">
      <h1> PROJETS </h1>
    </div>
   
  <!--`Id_Projets`, `Titre`, `DateDebut`, `DateFin`, 
  `Contexte`, `Description`, `CodHexTypo`, `LienImgFond`, `Lien`, `Id_User     -->
    <!--========================= Permet d'afficher toutes les expériences ========================= -->
    
      <?php foreach ($req as $result) { ?>
       <div class="projets"> <!--  TODO FAIRE CSS PROJETS  -->
	
        <?php
        echo $result["DateDebut"];?> 
        -
        <?php echo $result["DateFin"];
        ?>

          <h2>
          <strong>
            <?php echo $result["Titre"]?> 
          </strong> - 
            <?php echo $result["Contexte"]?>
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