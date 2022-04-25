
<?php
include_once "fonctions.php";
?>
<!DOCTYPE html>
<html>

    <link rel="stylesheet" href="stylesheet.css">
<body>

<Footer>
                    <?php if (check_connected()==true) {?>
                    
                        <a href="Lougout.php">  Déconnexion </a> 
                            <!-- <img src="images/lougout.png" alt="Lien vers site externe"/>  -->
                        
                     
                    <?php } ?>
                  
                      <ol >      
                         <li >
                           
                           <a href="https://www.linkedin.com/in/lottie-rocuet-1092a1172" target="_blank" class="contact">
                               <img src="images/linkedin.png">
                               
                           </a>
                           
                       </li>
       
                       <li>
                       <a href="mailto:lottie.rocuet@gmail.com" target="_blank" class="contact">
                               <img src="images/mail.png">                               
                           </a>
                       </li>

                       </ol> 
                        

                 
       </Footer>
</body>

</html>
