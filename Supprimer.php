<?php

include_once "Fonctions.php";


    if( isset($_GET['Id_Projets']))
    {
       
    
    
      $req =$bdd->prepare("DELETE FROM projets WHERE Id_Projets=?");
            
                    
        $req->execute(array($_GET['Id_Projets']));

        
    }
    header("Location: Projets.php");

   if( isset($_GET['Id_Pages']))
    {

      if(!empty($_GET['Type']==0))  
      {
        $req =$bdd->prepare("DELETE FROM pages WHERE  pages.Id_Pages=? pages.type=?");
              
                      
        $req->execute(array($_GET['Id_Pages'] ));

          
      }
      header("Location: Experiences.php");
    
      if(!empty($_GET['Type']==1))
      {      
        $req =$bdd->prepare("DELETE FROM pages WHERE  pages.Id_Pages=? & pages.type=? ");
              
                      
        $req->execute(array($_GET['Id_Pages'] ));

          
      }
      header("Location: Formations.php");
    }
    

  ?>