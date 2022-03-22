<?php
include_once "Fonctions.php";
?>


<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Expérience</title>
  <link rel="stylesheet" href="stylesheet.css">
  <script src="script.js"></script>
  <img src=images/fond.png id=fond class=fond alt=/>
</head>


</head>
<body>
    <div class = "row"> <!--Création d'une ligne où la navbar et le reste sont côtes à côtes-->
        <div class = "col-3">
          <!-- TODO <?php require_once "NavBarre.php"; ?> <!--Permet d'afficher la barre de navigation-->
        </div>
        <div class = "col-9">
            <h1 >Bienvenue</h1>
            <div class ="row">
                <div class ="col-md-4 col-3"></div>
                <div class ="Accueil col-md-8 col-9">Profil des expériences</div> <!--Affiche la phrase sur la droite de l'écran-->
            </div>
 
  <div class ="experiences" id ="experiences">
    <img src=images/fond.png id=fond class=fond alt=/> 
      <div class = "brentre">
        <p><i>Février - Juin 2021 </i></p>
        <h2>Etude Bien Rentré - Maquettage UX </h2>
        Etude via i2c, junior entreprise de l’ENSC. Réalisation d’un benchmark, charte graphique et d’une maquette dynamique d’application mobile. 
      </div>
      <form method = "get" action="Experiences.php" class ="Infos">
        <!-- TODO : REMETTRE LES VARIABLES AU BON NOM DE LA BDD ET ENLEVER L'énoncé "DOMAINES", ETC-->
        <div class ="cadre"> <!-- Affiche le cadre-->
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
            <!-- Affiche toutes les informations des expériences postées par un élève -->
        </div>
        </form>
    </div>

</body>
</html>