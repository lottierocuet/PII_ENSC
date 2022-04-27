<?php

include_once "Fonctions.php";
check_connected(); 
   

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

  <?php include_once "NavBarre.php"; ?>

        <?php if (check_connected()==true) {?>
          <div class = "titre">
              <h1> ADMIN FORMATIONS </h1>
          </div> 
          <?php }else{ ?>
        
            <div class = "titre">
                <h1> FORMATIONS </h1>
            </div>
          <?php }?>
      
        <?php if (check_connected()==true) {?>
               <a href="ModifPages.php" class="ajouter">
                <img src="images/ajouter.png">
              </a>   
          <?php }?> 

    <div class ="bodyform">
          <?php foreach ($req as $result) { ?>
              <div class="formations"> 
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
          
          
          <?php echo $result['Id_Pages']?>

            <?php if (check_connected()==true) {?>

            

              <div class="lien">

                <button href="Supprimer.php?Id_Pages=<?php echo $result['Id_Pages']?>">  
                  <img src="images/supprimer.png" alt="Lien vers site externe"/>  
                </button> 
              
                <!-- Trigger/Open The Modal -->
                <button id="myBtn<?php echo $result['Id_Pages']?>">
                  <img src="images/modifier.png"alt="Lien vers site externe"/>
                </button>
              </div>

              <!-- The Modal -->
              <div id="Modal<?php echo $result['Id_Pages']?>" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>
                      <form method="POST" action="PopUpModifPages.php" class ="cadre" id="Modal<?php echo $result['Id_Pages']?>" class="modal"> 
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
                                      
                            <input class = "Ajout" type="submit" value="Modifier"/>
                              

                      </form>
                    </p>
                
                </div>

              </div>

              <script>
                // Get the modal
                var modal = document.getElementById("Modal<?php echo $result['Id_Pages']?>");

                // Get the button that opens the modal
                var btn = document.getElementById("myBtn<?php echo $result['Id_Pages']?>");

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


            <?php }?>  
          <?php }?>   
    
   



    </div>
</div>


  

  <?php include_once "Footer.php"?> 

</body>
</html>