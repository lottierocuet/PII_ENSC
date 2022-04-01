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
  <div class ="contenant">
  <!-- Présentation générale de la page ===================================== -->
    <div class = "titre">
      <h1> EXPERIENCES </h1>
    </div>
    <!-- =============================Présentation générale du site===================================== -->
    <div class = "presentation">  
      <h2>Lottie Rocuet Portfolio</h2>
        Bonjour à tous je suis la présidente du club poulpyboule, bien venu à vous dans mon Portfolio
    </div> 


    
    
    <!-- Présentation générale d'une expérience témoin ===================================== -->
    <div class="experiences">
      <p><i>Février - Juin 2021 </i></p>
      <h2>Etude Bien Rentré - Maquettage UX </h2>
      <p>Etude via i2c, junior entreprise de l’ENSC. Réalisation d’un benchmark, 
      charte graphique et d’une maquette dynamique d’application mobile. 
      </p>
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