<?php

include_once "Fonctions.php";
check_connected();
//     if(!empty($_POST['Id_Pages']) && !empty($_POST['Titre'])) 
//     {
//       //1) on récupère les données via des post et des variables 
//       $Id_User=$_SESSION['Id_User'];
//       $Titre=$_POST['Titre'];
//       $Id_Pages=$_POST['Id_Pages'];
//       $DateDebut_organisation=$_POST['DateDebut_organisation'];
//       $DateFin=$_POST['DateFin'];
//       $Localisation=$_POST['Localisation'];
//       $Description=$_POST['Description'];
//       $Lien=$_POST['Lien'];
//               $req2 =$bdd->prepare('INSERT INTO organisation
//             (
//             Nom_Organisation, 
//             Type_Organisation, 
//             Domaine_Entreprise, 
//             Ville_Entreprise, 
//             Rue_Organisation, 
//             Code_postal_Organisation 
//             )VALUES (?, ?, ?, ?, ?, ?)');
// $req2=$req2->execute(array(
//             $DateDebut_organisation, $Id_Pages_organisation, $activite_organisation, $ville_organisation, $adresse_organisation, $code_postal_organisation
//             ));
// $orga_id = $bdd->lastInsertId();
//         // insert expérience into BD
//         //$stmt = $bdd->prepare('select * from utilisateur where Id_Utilisateur=? and Mot_de_passe=?');
//         $req =$bdd->prepare('INSERT INTO expérience (
//             Titre_Experience, 
//             Type_Experience, 
//             Date_debut_Experience,
//             Date_fin_Experience,
//             Domaine_competence_1, 
//             Domaine_competence_2, 
//             Domaine_competence_3, 
//             Secteur_d_activité_1, 
//             Secteur_d_activité_2, 
//             Secteur_d_activité_3, 
//             Salaire, 
//             Poste, 
//             Description_Experience, 
//             Region,
//             Id_Organisation, 
//             Id_Utilisateur
//                 )VALUES (:Titre, :Id_Pages, :date_debut, :date_fin, :competence_1, :competence_2, :competence_3, :activite_1, :activite_2, :activite_3, :Lien, :Description, :description, :Localisation, :orga_id, :identifiant)');
// $req=$req->execute(array(
//       'Titre'=>$Titre,
//       'Id_Pages'=>$Id_Pages,
//       'date_debut'=>$date_debut,
//       'date_fin'=>$date_fin,
//       'competence_1'=>$competence_1,
//       'competence_2'=>$competence_2,
//       'competence_3'=>$competence_3,
//       'activite_1'=>$activite_1,
//       'activite_2'=>$activite_2,
//       'activite_3'=>$activite_3,
//       'Lien'=>$Lien,
//       'Description'=>$Description,
//       'description'=>$description,
//       'Localisation'=>$Localisation,
//       'orga_id'=>$orga_id,
//       'identifiant'=>$identifiant
//             ));
//         header("Location: Mes_Experiences.php");
//     }
?>


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

 

     <form method = "get" action="Experiences.php" class ="Experiences">
         Test affichage
          ==================================EN TRAVAUX============================

          
        <div class ="cadre">  //Affiche le cadre
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
    </div>

</body>
</html>