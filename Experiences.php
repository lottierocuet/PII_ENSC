<?php

include_once "Fonctions.php";
check_connected();
session_start();
    include_once "Fonctions.php";
    

    $req = $bdd->query('SELECT * FROM Pages  WHERE Pages.Type = 0 ');
?>


<html>
<head>
  <meta charset="utf-8">
  <title>Expérience</title>
  <link rel="stylesheet" href="stylesheet.css">
  <script src="script.js"></script>
</head>
<!-- =============================Présentation générale du site===================================== -->
      <div class = "presentation">  
        <h1>Lottie Rocuet Portfolio</h1>
        Bonjour à tous je suis la présidente du club poulpyboule, bien venu à vous dans mon Portfolio
      </div>    
<!-- =============================Présentation générale du site===================================== -->
<!-- Présentation générale de la page ===================================== -->
      <div class = "titre">
        <h1> EXPERIENCES </h1>
      </div> 
</head>

<body>
    
  <div class ="contenant">
    <div class = "fond">
      <img class ="fond" src="images/fond.png" alt="image">
    </div>

<!-- Présentation générale d'une expérience témoin ===================================== -->
    <div class = "row">
      <p><i>Février - Juin 2021 </i></p>
      <h2>Etude Bien Rentré - Maquettage UX </h2>
          Etude via i2c, junior entreprise de l’ENSC. Réalisation d’un benchmark, 
          charte graphique et d’une maquette dynamique d’application mobile. 
    </div>
    <div class = "row">
    <!--========================= Permet d'afficher toutes les expériences ========================= -->
      <?php foreach ($req as $result) { ?>
      <div class = "row">
        <div class="col-4">
          <?php echo $result["DateDebut"]?> - <?php echo $result["DateFin"]?>
        </div>
        <div class="col-4">
          <h2>
          <strong>
            <?php echo $result["Titre"]?> 
          </strong>
            <?php echo $result["Localisation"]?>
          </h2>
        </div>
        <div class="col-4">
            <?php echo $result["Description"]?> 
        </div>
        <a href="images/link.png"<?= $result['Lien'] ?>>
                 
      </div>
        </a>
      <?php }?>
    </div>
       
          
  </div>
</body>
</html>