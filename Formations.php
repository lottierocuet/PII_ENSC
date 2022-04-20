<?php

include_once "Fonctions.php";
include_once "NavBarre.php";
check_connected(); 
session_start();

    

    $req = $bdd->query('SELECT * FROM pages  WHERE pages.Type = 1 ');


?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Formations</title>
  <link rel="stylesheet" href="stylesheet.css">
  <!-- <script src="script.js"></script> -->

 
</head>  

<body>
  

<div class ="contenant">  

    <div class = "titre">
      <h1> FORMATIONS </h1>
    </div>  
    
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
            
           
        
            <?php if (check_connected()==true) {?>
            <div class="lien">

               
            <a>  
              <img src="images/supprimer.png"alt="Lien vers site externe"/>     
            </a>     

            <a>      
              <img src="images/modifier.png"alt="Lien vers site externe"/>     
            </a>  

            <?php if (!empty($result['Lien'])) {?>
              <a href=<?= $result['Lien'] ?> target="_blank">
              <img src="images/link.png"alt="Lien vers site externe"/>     
              </a>
            <?php }?>
              
            </div>

        <?php }?>

      </div>
         
      <?php }?>

        <?php if (check_connected()==true) {?>
          <!-- MODIFIER UNE PAGE -->
          <?php  include ("ModifPages.php"); ?>
        <?php } ?>
    
           
          
  </div>
</body>
</html>