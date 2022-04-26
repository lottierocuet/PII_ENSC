<?php

  include_once "Fonctions.php";
  
 // VERIFIER LACCES EN TANT QU'ADMIN OU VISITEUR
  check_connected(); 
  

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


 
</head>  

<!-- =============================Présentation générale du site===================================== -->
 


<body>
  
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

  <div class ="contenant">

    <?php include_once "NavBarre.php"; ?>
    <?php if (check_connected()==false) {?>
          <div class = "titre">
            <h1> EXPERIENCES </h1>
        </div> 
    <?php } ?>
    
    <!-- =============================Présentation générale du site===================================== -->
    <div class = "presentation">  
      <h2>Lottie Rocuet Portfolio</h2>
        <h3>Etudiante cogniticienne en 2ème année à l'ENSC (Ecole Nationale de Cognitique). </h3>
        
        <p>
        Voici un petit morceau de moi, une vitrine de mon profil professionnel.
       
      Grande passionée par la e-santé et les nouvelles technologies autour de l'éducation,  </br> 
    
    </br> 
    </p>

        bon voyage à travers mon Portfolio
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
            
            
          <?php if (!empty($result['Lien'])) {?>
          <a href=<?= $result['Lien'] ?> target="_blank">
          <img src="images/link.png"alt="Lien vers site externe"/>     
          </a>
        
       <?php }?> 
       
          </div>
     

    <?php if (check_connected()==true) {?>
     
      <div class="lien">
            
      <a href="Supprimer.php?Id_Pages=<?php echo $result['Id_Pages']?>">  
         <img src="images/supprimer.png" alt="Lien vers site externe"/>  
                           
      </a>       

      <a id="Modif">      
        <button type="button" onclick=PopupPage() id="myBtn">
          <img src="images/modifier.png"alt="Lien vers site externe"/>
        </button>   
      </a>   

      </div> 

    <div id="myModal" class="modal">
      <div class="modal-content">
        Hello :)
        <!-- <?php //include "PopUpModifPages.php"?> -->
        <span class="close">&times;</span>
      </div>
    </div>
      
    </div> 


    <?php }?>
 
  <?php }?>
  
</div>
  <?php if (check_connected()==true) {?>
    <!-- MODIFIER UNE PAGE -->
 <?php include "ModifPages.php" ?>
    
  <?php } ?>
  </div>


  
  
  </div>
  <?php include_once "Footer.php"?> 

</body>
</html>