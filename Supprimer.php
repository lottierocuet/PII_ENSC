<!-- Faire script qui delete from -->

<?php

include_once "Fonctions.php";

if( isset($_GET['Id_Projets']))
    {
       
    
    
      $req =$bdd->prepare("DELETE FROM projets WHERE Id_Projets=?");
            
                    
        $req->execute(array($_GET['Id_Projets']));

        
    }
    header("Location: Projets.php");



    // if( isset($_GET['Id_Projets']))
    // {
       
    
    
    //   $req =$bdd->prepare("DELETE FROM projets,pages WHERE Id_Projets=?,Id_Pages=? ");
            
                    
    //     $req->execute(array($_GET['Id_Projets']));

        
    // }
    // header("Location: Projets.php");

    // if($_GET['Type']==0)
    // {
    //   if( isset($_GET['Id_Pages']))
    //   {
        
      
      
    //     $req =$bdd->prepare("DELETE FROM pages WHERE  Id_Pages=? ");
              
                      
    //       $req->execute(array($_GET['Id_Pages'] ));

          
    //   }
      
    //     header("Location: Experiences.php");
    // }
    // else if($_GET['Type']==1){

    //   if( isset($_GET['Id_Pages']))
    //   {
        
      
      
    //     $req =$bdd->prepare("DELETE FROM pages WHERE  Id_Pages=? ");
              
                      
    //       $req->execute(array($_GET['Id_Pages'] ));

          
    //   }
    //   header("Location: Formations.php");
    // }
    

  ?>