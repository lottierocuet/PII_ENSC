<?php
try
{
$bdd = new PDO(
    'mysql:host=localhost;dbname=pii;charset=utf8',
    'root',
    ''

}
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo 'Connexion réussie';
            }
            
            /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        
// catch (Exception $e)
// {
//         die('Erreur : ' . $e->getMessage());
// }
// session_start();
// include_once "Fonctions.php";
?>


<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Expérience</title>
  <link rel="stylesheet" href="stylesheet.css">
  <script src="script.js"></script>
</head>


</head>
<body>
    

  <div class ="contenant">
    <div class = "fond">
      <img class ="fond" src="images/fond.png" alt="image">
    </div>
    <div class = "presentation">
      <h1>Lottie Rocuet Portfolio</h1>
      Bonjour à tous je suis la présidente du club poulpyboule, bien venu à vous dans mon Portfolio
    </div>    
    <div class = "brentre">
      <div class = "titre">
      <h1> EXPERIENCES </h1>
      </div>
          <p><i>Février - Juin 2021 </i></p>
          <h2>Etude Bien Rentré - Maquettage UX </h2>
          Etude via i2c, junior entreprise de l’ENSC. Réalisation d’un benchmark, 
          charte graphique et d’une maquette dynamique d’application mobile. 
    </div>
  </div>

 

     <!-- <form method = "get" action="Experiences.php" class ="Infos">
         TODO : REMETTRE LES VARIABLES AU BON NOM DE LA BDD ET ENLEVER L'énoncé "DOMAINES", ETC
        <div class ="cadre">  Affiche le cadre
            <h2>
            <strong><?php echo $user["Type_Experience"]?> </strong></h2>
            <br/>
            <?php echo $user["Date_debut_Experience"]?> - <?php echo $user["Date_fin_Experience"]?> - <?php echo $user["Poste"]?> - <?php echo $user["Salaire"]?>
            <br/>
            <h2>Domaine(s) de compétence(s) :</h2>
            <?php echo $user["Domaine_competence_1"]?> - <?php echo $user["Domaine_competence_2"]?> - <?php echo $user["Domaine_competence_3"]?> 
            <br/>
            <h2>Secteur(s) d'activité(s) :</h2>
            <?php echo $user["Secteur_d_activité_1"]?> - <?php echo $user["Secteur_d_activité_2"]?> - <?php echo $user["Secteur_d_activité_3"]?>
            <br/>
            <br/>
            <?php echo $user["Description_Experience"]?> 
            <br/>
            <br/>
            <br/>
            <h2>Chez :</h2> <?php echo $user["Nom_Organisation"]?> -<?php echo $user["Type_Organisation"]?> <br/>
            <strong>
            Domaine d'activité :</strong>
            <?php echo $user["Domaine_Entreprise"]?>
            <br/>
            <strong>
            Adresse : </strong>
            <?php echo $user["Rue_Organisation"]?> <br/>
            <?php echo $user["Ville_Entreprise"]?> - <?php echo $user["Code_postal_Organisation"]?>  <br/>                 
            <br/>
            
        </div>
        </form>
    </div>-->

</body>
</html>