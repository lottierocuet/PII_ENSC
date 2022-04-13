<?php

include_once "Fonctions.php";
//dateUS_toFR();
// check_connected();
// session_start();
    

    $req = $bdd->query('SELECT * FROM pages  WHERE pages.Type = 0 ');
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
  <!-- Présentation générale de la page ===================================== -->
    
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
        <a  target="_blank">
        <img src="images/supprimer.png"alt="Lien vers site externe"/>     
        </a>

        <a  target="_blank">
        <img src="images/modifier.png"alt="Lien vers site externe"/>     
        </a>

        <a href=<?= $result['Lien'] ?> target="_blank">
        <img src="images/link.png"alt="Lien vers site externe"/>     
        </a>
        </div>

      
      <?php }?>
    
           
          
  </div>
</body>
</html>