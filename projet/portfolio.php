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

<body class="portfolio_page">
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
          Portfolio
        </h2>
      </div>
    </div>
    <div class="container ">
      <div class="row carreau">
              <img src="../images/Portfolio.png" alt="netflix" >
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
    <p></p>
    <p>Dans le cadre du BTS SIO option SLAM, le portfolio a été conçu comme un espace numérique permettant de retracer les différentes expériences professionnelles et les compétences techniques acquises. Il a pour fonction de rassembler les projets les plus significatifs menés en formation ou en entreprise.</p>
    <p>Il sert également à mettre en lumière les compétences techniques à travers des projets concrets, en montrant comment les outils, langages et méthodes de développement sont appliqués en situation réelle. Une partie est consacrée à la veille technologique, afin de montrer la capacité à rester informé des dernières évolutions, en utilisant des sources fiables et des outils adaptés.</p>
  </div>
  
  <div class="text-section">
    <h3>Liste des tâches</h3>
    <ul>
      <li>🎨 Adaptation graphique d’un modèle existant pour correspondre à l’identité du portfolio.</li>
      <li>🧩 Organisation des différentes sections : présentation, projets, entreprises, compétences, veille.</li>
      <li>🗂️ Mise en place d’une structure de pages cohérente.</li>
      <li>📂 Intégration des projets réels avec détails techniques, outils utilisés et objectifs.</li>
      <li>📡 Mise en ligne du portfolio via une solution d’hébergement web.</li>
    </ul>
  </div>

  <div class="text-section">
    <h3>Compétences développées</h3>
    <ul>
    <h5>Développer la présence en ligne de l’organisation</h5>
    <li>Participer à la valorisation de l’image de l’organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques</li>
    <li>Participer à l’évolution d’un site Web exploitant les données de l’organisation.</li>
    <h5>Mettre à disposition des utilisateurs un service informatique</h5>
      <li>Déployer un service </li>
      <h5>Organiser son développement professionnel</h5>
      <li>Gérer son identité professionnelle </li>
    </ul>
  </div>
  
  <!-- Card Grid (for the sections that remain in cards) -->
  <div class="card-grid">
    <div class="descriptif-card">
      <h3>Outils utilisés</h3>
      <ul>
        <li>Visual Studio Code</li>
        <li>GitHub pour l'hébergement</li>
      </ul>
      <div class="tools-icons">
        <img src="../images/HTML5_logo.png" alt="logo html">
        <img src="../images/CSS3_logo.png" alt="logo css">
        <img src="<?php echo $root_path; ?>images/logo_javascript.png" alt="logo js">
      </div>
      <div class="tools-icons">
        <img src="<?php echo $root_path; ?>images/PHP-logo.png" alt="logo PHP">
        <img src="<?php echo $root_path; ?>images/Bootstrap_logo.png" alt="logo PHP">
      </div>
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
            <a href="https://portfolio.qetourmy.com/index.php" target="_blank">
              résultat final
            </a>
          </div>
        </div>
        <div class="box">
         
          <div class="btn-box">
            <a href="https://github.com/Quentin3749/PorteFolio" target="_blank">
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
