<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Portfolio BTS SIO | Quentin ETOURMY</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />


  

</head>

<body class="veille-page">

  <div class="hero_area">
    <!-- header section strats -->
    <?php 
    $root_path = "";
include_once "header.php";
?>
    <!-- end header section -->
    <!-- slider section -->
    <section class="service_section layout_padding ">
    
      <div class="heading_container heading_center ">
        <h1 class="projet">
          Veille technologique
        </h1>
      </div>
      <div class="container container1 slider_section">
           
                
           <div class="detail-box">
               <h2>
               - Qu'est-ce que la veille technologique ? <br>
               </h2>
               <p class="about_text"> La veille technologique à pour but surveiller les évolutions techniques et les innovations dans un secteur d'activité donné. Elle englobe la surveillance, la collecte, le partage et la diffusion d'informations permettant d'anticiper ou de s'informer sur des changements en matière de recherche, développement, brevet, lancement de nouveaux produits, matériaux, processus, concepts, et innovation de fabrication. Cela permet d'évaluer leur impact sur l'environnement et l'organisation.
               <br><br/>
              
               </p>
               <h2>
                  - Mes outils de veille technologique :<br>
               </h2>

               <p>
    <span class="logo-container"> <a href="https://feedly.com" target="_blank"><img src="images/logo_feedly.png" alt="Feedly Logo"></a></span>
    <span class="logo-container"><a href="https://www.google.fr/alerts" target="_blank"><img src="images/google_alert.png" alt="Google Alert Logo"></a></span>
    <span class="logo-container"><a href="https://daily.dev/fr-fr" target="_blank"><img src="images/logo_daily.dev.jpg" alt="Daily.dev Logo"></a></span>
    <span class="logo-container"><a href="https://www.reddit.com/" target="_blank"><img src="images/Reddit-Logo.png" alt="Reddit Logo"></a></span>
</p>
       
           </div>

</div>
    </section>
    

    <section class="service_section layout_padding technology-watch-carousel">
    <div class="heading_container heading_center">
        <h1 class="projet">Mes sujets de veille</h1>
    </div>

    <div class="theme-nav">
        <button onclick="showCarousel('ai')" class="active">L'intelligence Artificielle</button>
        <button onclick="showCarousel('robotics')">Programmation Robotique</button>
        <button onclick="showCarousel('cybersecurity')">Cybermenaces et solutions</button>
    </div>

    <div class="carousel-container-wrapper">
        <div id="ai-carousel" class="carousel-container active">
            <div class="description">L'intelligence artificielle évolue rapidement...</div>
            <div class="grid-container">
                <div class="grid-item">IA 1</div>
                <div class="grid-item">IA 2</div>
                <div class="grid-item">IA 3</div>
                <div class="grid-item">IA 4</div>
                <div class="grid-item">IA 5</div>
                <div class="grid-item">IA 6</div>
            </div>
            <div class="theme-description">
        <p>L'IA permet d'améliorer l'automatisation, l'analyse de données et bien plus encore. Elle est utilisée dans divers secteurs comme la santé, le commerce et la finance.</p>
    </div>
        </div>

        <div id="robotics-carousel" class="carousel-container">
            <div class="description">La programmation robotique permet...</div>
            <div class="grid-container">
                <div class="grid-item">Robot 1</div>
                <div class="grid-item">Robot 2</div>
                <div class="grid-item">Robot 3</div>
                <div class="grid-item">Robot 4</div>
                <div class="grid-item">Robot 5</div>
                <div class="grid-item">Robot 6</div>
            </div>
            <div class="theme-description">
        <p>L'IA permet d'améliorer l'automatisation, l'analyse de données et bien plus encore. Elle est utilisée dans divers secteurs comme la santé, le commerce et la finance.</p>
    </div>
        </div>

        <div id="cybersecurity-carousel" class="carousel-container">
            <div class="description">Les cybermenaces sont en constante évolution...</div>
            <div class="grid-container">
                <div class="grid-item">Cyber 1</div>
                <div class="grid-item">Cyber 2</div>
                <div class="grid-item">Cyber 3</div>
                <div class="grid-item">Cyber 4</div>
                <div class="grid-item">Cyber 5</div>
                <div class="grid-item">Cyber 6</div>
            </div>
            <div class="theme-description">
        <p>L'IA permet d'améliorer l'automatisation, l'analyse de données et bien plus encore. Elle est utilisée dans divers secteurs comme la santé, le commerce et la finance.</p>
    </div>
        </div>
    </div>
</section>
    

  

  

    <script>
        function showCarousel(theme) {
            // Cacher tous les carrousels
            ['ai', 'robotics', 'cybersecurity'].forEach(t => {
                document.getElementById(`${t}-carousel`).classList.remove('active');
                document.querySelector(`button[onclick="showCarousel('${t}')"]`).classList.remove('active');
            });

            // Afficher le carrousel sélectionné
            document.getElementById(`${theme}-carousel`).classList.add('active');
            document.querySelector(`button[onclick="showCarousel('${theme}')"]`).classList.add('active');
        }
    </script>



  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>

  <script src="js/veille-technologique.js"></script>


</body>
<?php 
  include_once "footer.php";
  ?>
</html>