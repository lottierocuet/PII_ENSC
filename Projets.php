<?php

include_once "Fonctions.php";
include_once "NavBarre.php";
check_connected();
session_start();
    

    $req = $bdd->query('SELECT * FROM projets   ');

    // if(isset($_GET['suppr']) )
    // {
    //   $bdd->query('DELETE *FROM projets WHERE 'Id_Projets'=$_GET['Id_Projet']');
    // }

    if( !empty($_GET['Id_Projets']) && !empty($_GET['Titre']))
    {
      //1) on récupère les données via des post et des variables 
      $Titre=$_POST['Titre'];
      $Id_Projets=$_GET['Id_Projets'];
      
    
    
      $req =$bdd->prepare(
            "DELETE *FROM 'projets'( 
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
<!--========================= Permet d'afficher toutes les expériences ========================= -->
    
  <?php foreach ($req as $result) { ?>
    <div class="projets"> 
    
      <style>
       .projets{
         background-image: url(  images/ProjetsTest.jpg); 
         /*  <?php $result["LienImg"]; ?>*/ 
        background-repeat: no-repeat;
        background-size: 100%;
        background-position: 100%;
        opacity:70%;
        margin-right:2%;
        color:black;
        padding:5%;
        min-height:1000px
        background-color: linear-gradient(0deg,white 70%);      
         
         
       }
       .titreProj{
         color: <?php $result["CodHexTypo"]; ?>
       }
       
      </style>
 
      <?php
        $dateDeb = date_create( $result['DateDebut']);
        echo date_format($dateDeb,"F-Y");?> 
          -
        <?php 
        $dateFin = date_create( $result['DateFin']);
        echo date_format($dateFin,"F-Y");  ?> 

    <div class="titreProj">  
      <h2>
      <strong>
        
          <?php echo $result["Titre"]?> 
      </strong> - 
      <?php echo $result["Contexte"]?>
      </h2>
    </div>
        
        
      <?php echo $result["Description"]?> 
  </div>
        
      <?php if (check_connected()==true) {?>
        <div class="lien">
            
        <a>  
         <img src="images/supprimer.png" alt="Lien vers site externe"/>  -->
          <!-- <?$result ;

          if(mysql_query($query)){
            echo 'le texte '.$_GET['Titre'].' est supprimé.'; 
          }?> -->

           
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
  <?php } ?> 
     

    <?php if (check_connected()==true) {?>
      <!-- MODIFIER UNE PAGE -->
      <?php  include ("ModifProjet.php"); ?>
    <?php } ?>
      
  </div> 
          
</div> 

</body>
</html>