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
          Smart guide
        </h2>
      </div>
    </div>
    <div class="container ">
      <div class="row carreau">
              <img src="../images/netflixmaquette.png" alt="netflix" >
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
    <p>Projet de création d'une maquette web d'accueil pour "Bienvenue Formation"</p>
    <p>Objectif: Reproduire une interface utilisateur professionnelle</p>
    <p>Projet réalisé dans le cadre du BTS SIO</p>
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
  
  <!-- Card Grid (for the sections that remain in cards) -->
  <div class="card-grid">
    <div class="descriptif-card">
      <h3>Outils utilisés</h3>
      <ul>
        <li>Éditeur de code VSCode</li>
        <li>Git pour le versionnage</li>
        <li>GitHub Pages pour l'hébergement</li>
      </ul>
      <div class="tools-icons">
        <img src="../images/HTML5_logo.png" alt="logo html">
        <img src="../images/CSS3_logo.png" alt="logo css">
      </div>
    </div>
    
    <div class="descriptif-card">
      <h3>Compétences développées</h3>
      <ul>
        <li>Maîtrise des bases du HTML</li>
        <li>Maîtrise du CSS</li>
        <li>Responsive design</li>
        <li>Versionnage avec Git</li>
        <li>Déploiement sur GitHub Pages</li>
      </ul>
    </div>
    
    <div class="descriptif-card">
      <h3>Documentation</h3>
      <ul>
        <li>Documentation HTML/CSS sur MDN Web Docs</li>
        <li>Guide de bonnes pratiques pour l'accessibilité web</li>
        <li>Documentation GitHub pour le déploiement</li>
      </ul>
    </div>
  </div>
      <div class="price_container ">
        <div class="box">
          
          <div class="btn-box">
            <a href="https://quentin3749.github.io/projet-netflix/" target="_blank">
              résultat final
            </a>
          </div>
        </div>
        <div class="box">
         
          <div class="btn-box">
            <a href="https://github.com/Quentin3749/projet-netflix" target="_blank">
              visuel du code
            </a>
          </div>
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
