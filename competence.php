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

<body class="competence-page">

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
          Compétences
        </h1>
      </div>
     
    </section>
    

    <section class="service_section layout_padding technology-watch-carousel">
   

    <div class="theme-nav">
        
        <button onclick="showCarousel('tout')" class="active">tout</button>
        <button onclick="showCarousel('patrimoine')">patrimoine informatique</button>
        <button onclick="showCarousel('assistances')">demandes d'assistances et d'évolution</button>
        <button onclick="showCarousel('présence')">présence en ligne</button>
        <button onclick="showCarousel('projet')">mode projet</button>
        <button onclick="showCarousel('disposition')">Mise à disposition</button>
        <button onclick="showCarousel('développement')">développement professionnel</button>

    </div>

    <div class="carousel-container-wrapper">
        <div id="tout-carousel" class="carousel-container active">
            
<section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        
      </div>
    </div>
    <div class="container ">
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="box maquette ">
            <div class="img-box">
              <img src="images/calculatrice.png" alt="">
            </div>
            <div class="detail-box boxi">
              <h4>
                Click and Eat
              </h4>
              <p>
              projet à mettre sur GIThub
              </p>
              <a href="projet/clickandeat.php">
              en savoir plus
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="box maquette ">
            <div class="img-box">
              <img src="images/immobilier.png" alt="">
            </div>
            <div class="detail-box boxi">
              <h4>
                portfolio
              </h4>
              <p>
                projet à mettre sur GIThub
              </p>
              <a href="projet/portfolio.php">
                en savoir plus
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="box maquette ">
            <div class="img-box">
              <img src="images/s6.png" alt="">
            </div>
            <div class="detail-box boxi">
              <h4>
                Bienvenue Formation
              </h4>
              <p>
                à terminer
              projet à mettre sur GIThub
              </p>
              <a href="projet/bienvenueformation.php">
              en savoir plus
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <br>
    <div class="container ">
    
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="box maquette ">
            <div class="img-box">
              <img src="images/calculatrice.png" alt="">
            </div>
            <div class="detail-box boxi">
              <h4>
                Mon professionnel
              </h4>
              <a href="projet/monprofessionnel.php">
              en savoir plus
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box maquette ">
            <div class="img-box">
              <img src="images/immobilier.png" alt="">
            </div>
            <div class="detail-box boxi">
              <h4>
                Mon particulier
              </h4>
              <a href="projet/monparticulier.php">
                en savoir plus
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box maquette ">
            <div class="img-box">
              <img src="images/logo_ia.png" alt="">
            </div>
            <div class="detail-box boxi">
              <h4>
                IA axa
              </h4>
              <a href="projet/iaaxa.php">
              en savoir plus
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
            <div class="theme-description">
        <p>L'IA permet d'améliorer l'automatisation, l'analyse de données et bien plus encore. Elle est utilisée dans divers secteurs comme la santé, le commerce et la finance.</p>
    </div>
        </div>

        <div id="patrimoine-carousel" class="carousel-container">
        <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
      
        <h2 class="projet">
        Gérer le patrimoine informatique
        </h2>
        <p>
        <ul class="projet">
    <li>Recenser et identifier les ressources numériques</li>
    <li>Exploiter des référentiels, normes et standards adoptés par le prestataire informatique</li>
    <li>Mettre en place et vérifier les niveaux d’habilitation associés à un service</li>
    <li>Vérifier les conditions de la continuité d’un service informatique</li>
    <li>Gérer des sauvegardes</li>
    
</ul>
        </p>
      
      </div>
    </div>
    <div class="container ">
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="box maquette ">
            <div class="img-box">
              <img src="images/calculatrice.png" alt="">
            </div>
            <div class="detail-box boxi">
              <h4>
                Click and Eat
              </h4>
              <p>
              projet à mettre sur GIThub
              </p>
              <a href="projet/clickandeat.php">
              en savoir plus
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>

       

        <div class="col-md-6 col-lg-4">
          <div class="box maquette ">
            <div class="img-box">
              <img src="images/s6.png" alt="">
            </div>
            <div class="detail-box boxi">
              <h4>
                Bienvenue Formation
              </h4>
              <p>
                à terminer
              projet à mettre sur GIThub
              </p>
              <a href="projet/bienvenueformation.php">
              en savoir plus
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>


        <div class="col-md-6 col-lg-4">
          <div class="box maquette ">
            <div class="img-box">
              <img src="images/logo_ia.png" alt="">
            </div>
            <div class="detail-box boxi">
              <h4>
                IA axa
              </h4>
              <a href="projet/iaaxa.php">
              en savoir plus
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <br>
   
  </section>
            <div class="theme-description">
        <p>L'IA permet d'améliorer l'automatisation, l'analyse de données et bien plus encore. Elle est utilisée dans divers secteurs comme la santé, le commerce et la finance.</p>
    </div>
        </div>

        <div id="assistances-carousel" class="carousel-container">
        <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
      <h2 class="projet">
      Répondre aux incidents et aux demandes d'assistances et d'évolution
        </h2>
        <p>
        <ul class="projet">
    <li>Collecter, suivre et orienter des demandes</li>
    <li>Traiter des demandes concernant les services réseau et système, applicatifs</li>
    <li>Traiter des demandes concernant les applications</li>
    
    
</ul>
        </p>
      </div>
    </div>
    <div class="container ">
      <div class="row">
       


        
      </div>
    </div>
    <br>
    <div class="container ">
    
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="box maquette ">
            <div class="img-box">
              <img src="images/calculatrice.png" alt="">
            </div>
            <div class="detail-box boxi">
              <h4>
                Mon professionnel
              </h4>
              <a href="projet/monprofessionnel.php">
              en savoir plus
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box maquette ">
            <div class="img-box">
              <img src="images/immobilier.png" alt="">
            </div>
            <div class="detail-box boxi">
              <h4>
                Mon particulier
              </h4>
              <a href="projet/monparticulier.php">
                en savoir plus
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </section>
            <div class="theme-description">
        <p>L'IA permet d'améliorer l'automatisation, l'analyse de données et bien plus encore. Elle est utilisée dans divers secteurs comme la santé, le commerce et la finance.</p>
    </div>
        </div>

        <div id="présence-carousel" class="carousel-container">
        <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
      <h2 class="projet">
      Développer la présence en ligne de l’organisation
        </h2>
        <p>
        <ul class="projet">
    <li>Participer à la valorisation de l’image de l’organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques</li>
    <li>Référencer les services en ligne de l’organisation et mesurer leur visibilité</li>
    <li>Participer à l’évolution d’un site Web exploitant les données de l’organisation.</li>
    
    
</ul>
        </p>
      </div>
    </div>
   
    <br>
    <div class="container ">
    
      <div class="row">
      <div class="col-md-6 col-lg-4">
          <div class="box maquette ">
            <div class="img-box">
              <img src="images/immobilier.png" alt="">
            </div>
            <div class="detail-box boxi">
              <h4>
                portfolio
              </h4>
              
              <a href="projet/portfolio.php">
                en savoir plus
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box maquette ">
            <div class="img-box">
              <img src="images/calculatrice.png" alt="">
            </div>
            <div class="detail-box boxi">
              <h4>
                Mon professionnel
              </h4>
              <a href="projet/monprofessionnel.php">
              en savoir plus
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box maquette ">
            <div class="img-box">
              <img src="images/immobilier.png" alt="">
            </div>
            <div class="detail-box boxi">
              <h4>
                Mon particulier
              </h4>
              <a href="projet/monparticulier.php">
                en savoir plus
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
            <div class="theme-description">
        <p>L'IA permet d'améliorer l'automatisation, l'analyse de données et bien plus encore. Elle est utilisée dans divers secteurs comme la santé, le commerce et la finance.</p>
    </div>
        </div>

        <div id="projet-carousel" class="carousel-container">
        <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
      <h2 class="projet">
      Travailler en mode projet
        </h2>
        <p>
        <ul class="projet">
    <li>Analyser les objectifs et les modalités d’organisation d’un projet</li>
    <li>Planifier les activités</li>
    <li>Évaluer les indicateurs de suivi d’un projet et analyser les écarts</li>
    
    
</ul>
        </p>
      </div>
    </div>
    <div class="container ">
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="box maquette ">
            <div class="img-box">
              <img src="images/calculatrice.png" alt="">
            </div>
            <div class="detail-box boxi">
              <h4>
                Click and Eat
              </h4>
              <p>
              projet à mettre sur GIThub
              </p>
              <a href="projet/clickandeat.php">
              en savoir plus
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>

        

        <div class="col-md-6 col-lg-4">
          <div class="box maquette ">
            <div class="img-box">
              <img src="images/s6.png" alt="">
            </div>
            <div class="detail-box boxi">
              <h4>
                Bienvenue Formation
              </h4>
              <p>
                à terminer
              projet à mettre sur GIThub
              </p>
              <a href="projet/bienvenueformation.php">
              en savoir plus
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box maquette ">
            <div class="img-box">
              <img src="images/calculatrice.png" alt="">
            </div>
            <div class="detail-box boxi">
              <h4>
                Mon professionnel
              </h4>
              <a href="projet/monprofessionnel.php">
              en savoir plus
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <br>
    <div class="container ">
    
      <div class="row">
        
        <div class="col-md-6 col-lg-4">
          <div class="box maquette ">
            <div class="img-box">
              <img src="images/immobilier.png" alt="">
            </div>
            <div class="detail-box boxi">
              <h4>
                Mon particulier
              </h4>
              <a href="projet/monparticulier.php">
                en savoir plus
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
      
      </div>
    </div>
  </section>
            <div class="theme-description">
        <p>L'IA permet d'améliorer l'automatisation, l'analyse de données et bien plus encore. Elle est utilisée dans divers secteurs comme la santé, le commerce et la finance.</p>
    </div>
        </div>

        <div id="disposition-carousel" class="carousel-container">
        <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
      <h2 class="projet">
      Mettre à disposition des utilisateurs un service informatique
        </h2>
        <p>
        <ul class="projet">
    <li>Réaliser les tests d’intégration et d’acceptation d’un service</li>
    <li>Déployer un service</li>
    <li>Accompagner les utilisateurs dans la mise en place d’un service</li>
    
    
</ul>
        </p>
      </div>
    </div>
    <div class="container ">
      <div class="row">
        
        <div class="col-md-6 col-lg-4">
          <div class="box maquette ">
            <div class="img-box">
              <img src="images/calculatrice.png" alt="">
            </div>
            <div class="detail-box boxi">
              <h4>
                Click and Eat
              </h4>
              <p>
              projet à mettre sur GIThub
              </p>
              <a href="projet/clickandeat.php">
              en savoir plus
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>

        

        <div class="col-md-6 col-lg-4">
          <div class="box maquette ">
            <div class="img-box">
              <img src="images/s6.png" alt="">
            </div>
            <div class="detail-box boxi">
              <h4>
                Bienvenue Formation
              </h4>
              <p>
                à terminer
              projet à mettre sur GIThub
              </p>
              <a href="projet/bienvenueformation.php">
              en savoir plus
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box maquette ">
            <div class="img-box">
              <img src="images/immobilier.png" alt="">
            </div>
            <div class="detail-box boxi">
              <h4>
                portfolio
              </h4>
              
              <a href="projet/portfolio.php">
                en savoir plus
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <br>
    
  </section>
            <div class="theme-description">
        <p>L'IA permet d'améliorer l'automatisation, l'analyse de données et bien plus encore. Elle est utilisée dans divers secteurs comme la santé, le commerce et la finance.</p>
    </div>
        </div>

        <div id="développement-carousel" class="carousel-container">
        <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
      <h2 class="projet">
      Organiser son développement professionnel
        </h2>
        <p>
        <ul class="projet">
    <li>Mettre en place son environnement d’apprentissage personnel</li>
    <li>Mettre en œuvre des outils et stratégies de veille informationnelle</li>
    <li>Gérer son identité professionnelle</li>
    <li>Développer son projet professionnel</li>
    
    
</ul>
        </p>
      </div>
    </div>
    <div class="container ">
      <div class="row">
        
        <div class="col-md-6 col-lg-4">
          <div class="box maquette ">
            <div class="img-box">
              <img src="images/calculatrice.png" alt="">
            </div>
            <div class="detail-box boxi">
              <h4>
                Click and Eat
              </h4>
              <p>
              projet à mettre sur GIThub
              </p>
              <a href="projet/clickandeat.php">
              en savoir plus
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>

        

        <div class="col-md-6 col-lg-4">
          <div class="box maquette ">
            <div class="img-box">
              <img src="images/s6.png" alt="">
            </div>
            <div class="detail-box boxi">
              <h4>
                Bienvenue Formation
              </h4>
              <p>
                à terminer
              projet à mettre sur GIThub
              </p>
              <a href="projet/bienvenueformation.php">
              en savoir plus
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="box maquette ">
            <div class="img-box">
              <img src="images/immobilier.png" alt="">
            </div>
            <div class="detail-box boxi">
              <h4>
              portfolio
              </h4>
              <p>
                projet à mettre sur GIThub
              </p>
              <a href="projet/portfolio.php">
                en savoir plus
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <br>
  
  </section>
            <div class="theme-description">
        <p>L'IA permet d'améliorer l'automatisation, l'analyse de données et bien plus encore. Elle est utilisée dans divers secteurs comme la santé, le commerce et la finance.</p>
    </div>
        </div>

    </div>
</section>
    
    <script>
        function showCarousel(theme) {
            // Cacher tous les carrousels
            ['tout', 'patrimoine', 'assistances','présence', 'projet', 'disposition', 'développement'].forEach(t => {
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