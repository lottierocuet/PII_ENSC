<?php

  include_once "Fonctions.php";
  include_once "NavBarre.php";
 // VERIFIER LACCES EN TANT QU'ADMIN OU VISITEUR
  check_connected(); 
  
  session_start();

  //dateUS_toFR();
  
  

   
  // AFFICHER LES EXPERIENCES
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
    <div class = "titre">
      <h1> EXPERIENCES </h1>
  </div> 
    <!-- =============================Présentation générale du site===================================== -->
    <div class = "presentation">  
      <h2>Lottie Rocuet Portfolio</h2>
        Bonjour à tous je suis la présidente du club poulpyboule, bien venu à vous dans mon Portfolio
    </div> 
    
    <!--========================= Permet d'afficher toutes les expériences ========================= -->
  
     
  <?php foreach ($req as $result) { ?>
      <div class="experiences">    
	
      <?php
        $dateDeb = date_create( $result['DateDebut']);
        echo date_format($dateDeb,"F-Y");?> 
          -
        <?php 
        $dateFin = date_create( $result['DateFin']);
        echo date_format($dateFin,"F-Y");  ?> 

          <h2>
          <strong>
            <?php echo $result["Titre"]?> 
          </strong> - 
            <?php echo $result["Localisation"]?>
          </h2>
        
        
            <?php echo $result["Description"]?> 
      </div>  

    <?php if (check_connected()==true) {?>
      <div class="lien">
            
      <a>  
        <img src="images/supprimer.png"alt="Lien vers site externe"/>     
      </a>     

      <a>      
        <img src="images/modifier.png"alt="Lien vers site externe"/>     
      </a>     

        <a href=<?= $result['Lien'] ?> target="_blank">
        <img src="images/link.png"alt="Lien vers site externe"/>     
        </a>
      </div>

    <?php }?>
  <?php } ?> 

  <?php if (check_connected()==true) {?>
    <!-- MODIFIER UNE PAGE -->
    <?php  include ("ModifPages.php"); ?>
  <?php } ?>

  
      
  

      
          
  </div>
</body>
</html>