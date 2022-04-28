
<?php
include_once "fonctions.php";

?>
<!DOCTYPE html>
<html>

    <link rel="stylesheet" href="stylesheet.css">


<Footer>
                    <?php if (check_connected()==true) {?>

                        <div class="deconnexion">
                            <a href="Lougout.php" action="Logout.php">  Déconnexion </a> 
                        </div>
                    <?php } ?>
                  
                      <ul >      
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

                       </ul> 
                        

                 
       </Footer>


</html>
