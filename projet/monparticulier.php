<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="../images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Portfolio BTS SIO | Quentin ETOURMY</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="../css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />
  <link href="../css/new.css" rel="stylesheet" />

</head>

<body class="maquette-apple-page page-maquette-apple">
<?php
$root_path = "../"; // Chemin pour remonter à la racine
include_once "../header.php"; // Inclut le header depuis la racine
?>

<style>
    .projet-container {
      max-width: 1000px;
      margin: 0 auto;
      font-family: 'Roboto', sans-serif;
    }
    
    .projet-header {
      text-align: center;
      margin-bottom: 30px;
    }
    
    .projet-image {
      text-align: center;
      margin-bottom: 40px;
    }
    
    .projet-image img {
      max-width: 100%;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    
    .descriptif-section {
      background-color:rgba(22, 8, 82, 0.91);
      border-radius: 12px;
      padding: 30px;
      margin-bottom: 40px;
    }
    
    .descriptif-title {
      text-align: center;
      margin-bottom: 30px;
      font-size: 32px;
      color: #333;
      text-transform: uppercase;
    }
    
    .text-section {
      margin-bottom: 40px;
      padding: 0 20px;
    }
    
    .text-section h3 {
      color: #007bff;
      margin-bottom: 15px;
      padding-bottom: 10px;
      border-bottom: 2px solid #f0f0f0;
      font-size: 24px;
    }
    
    .text-section p {
      line-height: 1.6;
      margin-bottom: 15px;
    }
    
    .text-section ul {
      list-style-type: none;
      padding-left: 0;
      margin-bottom: 20px;
    }
    
    .text-section ul li {
      padding: 6px 0;
      position: relative;
      padding-left: 25px;
    }
    
    .text-section ul li:before {
      content: "•";
      color: #007bff;
      font-weight: bold;
      position: absolute;
      left: 0;
      font-size: 20px;
    }
    
    .card-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
      margin-top: 40px;
    }
    
    .descriptif-card {
      background-color: white;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    
    .descriptif-card h3 {
      color: #007bff;
      margin-bottom: 15px;
      text-align: center;
      padding-bottom: 10px;
      border-bottom: 2px solid #f0f0f0;
    }
    
    .descriptif-card ul {
      list-style-type: none;
      padding-left: 0;
    }
    
    .descriptif-card ul li {
      padding: 8px 0;
      position: relative;
      padding-left: 25px;
    }
    
    .descriptif-card ul li:before {
      content: "•";
      color: #007bff;
      font-weight: bold;
      position: absolute;
      left: 0;
      font-size: 20px;
    }
    
    .tools-icons {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-top: 15px;
    }
    
    .tools-icons img {
      height: 50px;
      width: auto;
    }
    
    .project-links {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-top: 30px;
    }
    
    .project-link {
      display: inline-block;
      background-color: #007bff;
      color: white;
      text-decoration: none;
      padding: 12px 30px;
      border-radius: 30px;
      font-weight: 500;
      transition: background-color 0.3s;
    }
    
    .project-link:hover {
      background-color: #0056b3;
    }
    .text-section p {
    color: white;
}

.text-section ul li {
    color: white;
}

/* Keep headings in their original color */
.text-section h3 {
    /* This maintains the original color (#007bff) for the headings */
}

/* Cible uniquement les titres <h5> de cette page */
.competence {
  color: #f1c232; /* Couleur jaune foncé */
}
</style>

  <div class="hero_area">
    <!-- header section starts -->
    
    <!-- end header section -->
    <!-- slider section -->
    
    <!-- end slider section -->

  <!-- service section -->

  <section class="service_section layout_padding" id="maquette-apple-section">

    <div class="container">
      <div class="heading_container heading_center">
        <h2 class="projet project">
          Mon Particulier
        </h2>
      </div>
    </div>
    <div class="container ">
      <div class="row carreau">
      <img src="<?php echo $root_path; ?>images/monpart.PNG" alt="monprofessionnel">
      </div>
    </div>
  </section>

  <section class="price_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h1 class="descriptifs">
          Descriptifs
        </h1>
      </div>
      <div class="descriptif-section">
  <!-- Text Sections (without cards) -->
  <div class="text-section">
    <h3>Contexte</h3>
    <p style="text-align: justify;">Ce projet avait pour objectif de refondre les pages d’une partie du site web interne destiné à des collaborateurs d'agence, afin de le rendre plus intuitif, plus agréable visuellement et plus facile à utiliser au quotidien.</p>
    <p style="text-align: justify;">Afin de permettre aux utilisateurs des pages de nous faire part de leurs suggestions et de signaler des modifications à apporter aux informations importantes, nous avons mis en place une adresse mail dédiée pour centraliser et traiter toutes les demandes.</p>
    <p style="text-align: justify;">Cette démarche a permis de moderniser l’interface et de mieux répondre aux attentes des utilisateurs.</p>
  </div>
  
  <div class="text-section">
    <h3>Liste des tâches</h3>
    <ul>
      <li>Analyse de la maquette originale</li>
      <li>Conception du squelette de la page en HTML</li>
      <li>Stylisation avec CSS</li>
      <li>Tests de compatibilité sur différents navigateurs</li>
      <li>Mise en ligne du résultat final</li>
    </ul>
  </div>

  <div class="text-section">
    <h3>Compétences développées</h3>
    <ul>
    <h5 class="competence">Répondre aux incidents et aux demandes d’assistance et d’évolution</h5>
    <li>Collecter, suivre et orienter des demandes </li>
    <li>Traiter des demandes concernant les applications </li>
    <h5 class="competence">Développer la présence en ligne de l’organisation</h5>
      <li>Participer à l’évolution d’un site Web exploitant les données de l’organisation.</li>
      <h5 class="competence">Travailler en mode projet</h5>
      <li>analyser les objectifs et les modalités d’organisation d’un projet</li>
      <li>Planifier les activités</li>
    </ul>
  </div>
  
  <!-- Card Grid (for the sections that remain in cards) -->
  <div class="card-grid">
    <div class="descriptif-card">
    <h3>Outils utilisés</h3>
<ul>
  <li>SharePoint – Éditeur de code intégré pour la modification des pages</li>
  <li>GIMP – Retouches d’images et création de visuels</li>
  <li>SharePoint – Hébergement et gestion du site interne</li>
  <li>Language de programmation</li>
</ul>

      <div class="tools-icons">
        <img src="../images/HTML5_logo.png" alt="logo html">
        <img src="../images/CSS3_logo.png" alt="logo css">
        <img src="<?php echo $root_path; ?>images/logo_javascript1.png" alt="logo html">
      </div>
    </div>
    
    
    
    <div class="descriptif-card">
    <h3>Documentation</h3>
<ul>
  <li><a href="../documents/guide_prise_en_main_monpart.pdf" target="_blank">Guide de prise en main </a></li>
  <li><a href="../documents/modèle_mon_part.pdf" target="_blank">Modèle de page</a></li>
  

  
</ul>
    </div>
  </div>
      <div class="price_container ">
        <div class="box">
          
          <div class="btn-box">
            <a href="../documents/Visuel_MonParticulier.pdf" target="_blank">
              Visuel
            </a>
          </div>
        </div>
        <div class="box">
         
          
        </div>
      </div>
    </div>
  </section>

  
  

  <?php 
  include_once "../footer.php";
  ?>


  <!-- jQery -->
  <script src="../js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="../js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="../js/custom.js"></script>


</body>

</html>
