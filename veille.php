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
  <style>
    .item-image.img-veille-ia1 {
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 18px;
      overflow: hidden;
      background: #eaf6ff;
    }

    .grid-item {
      width: 100% !important;
      max-width: 370px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      align-items: stretch;
    }
    .grid-item .item-image {
      width: 100% !important;
      height: 220px;
      margin: 0 0 18px 0;
      display: flex;
      align-items: stretch;
      justify-content: stretch;
      border-radius: 12px;
      overflow: hidden;
      background: #f4f4f4;
      box-shadow: 0 2px 8px rgba(0,0,0,0.04);
      padding: 0;
    }
    .grid-item .item-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      border-radius: 0;
      margin: 0;
    }
    @media (max-width: 600px) {
      .grid-item {
        max-width: 100%;
      }
      .grid-item .item-image {
        height: 140px;
      }
    }
  </style>

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
               <p class="about_text" style="text-align: justify;" > La veille technologique consiste à surveiller les avancées et innovations dans un domaine spécifique. Elle implique la collecte, l’analyse et la diffusion d’informations stratégiques sur la recherche, les brevets, les nouveaux produits, les matériaux, les procédés et les concepts émergents. Son objectif est d’anticiper les évolutions du secteur, d’évaluer leur impact sur l’environnement et l’organisation, et d’adapter les stratégies en conséquence.
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
        <button onclick="showCarousel('ai')" class="active">Les Malwares et les stratégies de prévention et de sécurisation.</button>
        <button onclick="showCarousel('robotics')">La programmation de robots collaboratifs pour l'assistance aux tâches humaines</button>
    </div>

    <div class="carousel-container-wrapper">
        <div id="ai-carousel" class="carousel-container active">
            <div class="grid-container">
                <div class="grid-item">
                    <div class="item-image">
                        <img src="images/cyber_Ant.png" alt="Cyber Ant" class="img-veille-ia1">
                    </div>
                    <div class="item-title">Chinese Weaver Ant hackers spied on telco network for 4 years</div>
                    <div class="item-desc">Un groupe de pirates chinois, Weaver Ant, a infiltré pendant plus de 4 ans le réseau d'un opérateur télécom asiatique. Utilisant des routeurs compromis et des web shells avancés, ils ont créé un réseau secret pour contrôler les serveurs et exfiltrer discrètement des données sensibles. Malgré plusieurs tentatives d'éradication, ils sont restés indétectés grâce à des techniques sophistiquées de persistance et de dissimulation.</div>
                    <div class="item-link"><a href="https://www.bleepingcomputer.com/news/security/chinese-weaver-ant-hackers-spied-on-telco-network-for-4-years/" target="_blank">Lire l'article</a></div>
                </div>
                <div class="grid-item">
                    <div class="item-image">
                        <img src="images/Malwares_dechaines.png" alt="Titre IA 2">
                    </div>
                    <div class="item-title">Malware Unleashed: Public Sector Hit in Sudden Surge, Reveals New Report</div>
                    <div class="item-desc">Des cyberattaques de plus en plus sophistiquées visent le secteur public, la santé et la finance, avec une hausse marquée en 2024. Les pirates utilisent des techniques variées comme le mouvement latéral, le vol d’identifiants et l’accès à distance, rendant la détection difficile. Les autorités recommandent de renforcer l’authentification, de limiter les accès et de sensibiliser les utilisateurs pour mieux protéger les données personnelles face à ces menaces croissantes.</div>
                    <div class="item-link"><a href="https://thehackernews.com/2023/08/malware-unleashed-public-sector-hit-in.html" target="_blank">Lire l'article</a></div>
                </div>
                <div class="grid-item">
                    <div class="item-image">
                        <img src="images/Logiciels_malveillants.png" alt="Titre IA 3">
                    </div>
                    <div class="item-title">Malware authors leverage more attack techniques that enable lateral movement</div>
                    <div class="item-desc">Les pirates informatiques exploitent aujourd’hui des techniques avancées pour se déplacer latéralement dans les réseaux et déployer des malwares. En moyenne, chaque attaque combine plusieurs méthodes comme l’exécution de scripts, le vol d’identifiants et l’accès à distance. Cette sophistication croissante complique la détection et impose aux entreprises de renforcer la prévention et la surveillance interne.</div>
                    <div class="item-link"><a href="https://www.csoonline.com/article/574589/malware-authors-leverage-more-attack-techniques-that-enable-lateral-movement.html#tk.rss_all" target="_blank">Lire l'article</a></div>
                </div>
                <div class="grid-item">
                    <div class="item-image">
                        <img src="images/cybersecurite_violation_de_donnees.png" alt="Titre IA 4">
                    </div>
                    <div class="item-title">Violations massives de données en 2024 : quels sont les principaux enseignements et mesures à prendre ?</div>
                    <div class="item-desc">En 2024, la France a connu une vague de violations massives de données, touchant des millions de personnes. La CNIL souligne que ces incidents sont souvent dus à des failles récurrentes et à un manque de détection rapide. Elle recommande de renforcer l’authentification, de limiter les accès et de surveiller les flux pour mieux protéger les données personnelles.</div>
                    <div class="item-link"><a href="https://www.cnil.fr/fr/violations-massives-de-donnees-en-2024-quels-sont-les-principaux-enseignements-mesures-a-prendre" target="_blank">Lire l'article</a></div>
                </div>
            </div>
            <div class="theme-description">
                <p>L'IA permet d'améliorer l'automatisation, l'analyse de données et bien plus encore. Elle est utilisée dans divers secteurs comme la santé, le commerce et la finance.</p>
            </div>
        </div>

        <div id="robotics-carousel" class="carousel-container">
            <div class="grid-container">
                <div class="grid-item">
                    <div class="item-image">
                        <img src="images/OpenAI.png" alt="Titre Robot 1">
                    </div>
                    <div class="item-title">Les robots humanoïdes d'OpenAI sont déjà en développement et pourraient transformer l'industrie mondiale</div>
                    <div class="item-desc">OpenAI, en partenariat avec Figure AI, développe des robots humanoïdes dotés d’IA avancée capables d’accomplir des tâches complexes et d’interagir naturellement avec leur environnement. Ce projet vise à transformer l’industrie et soulève d’importants enjeux éthiques et sociaux.</div>
                    <div class="item-link"><a href="https://www.drivingeco.com/fr/robots-humanoides-openai-ya-estan-desarrollo-podrian-transformar-industria-global/" target="_blank">Lire l'article</a></div>
                </div>
                <div class="grid-item">
                    <div class="item-image">
                        <img src="images/Nvidia.png" alt="Titre Robot 2">
                    </div>
                    <div class="item-title">Nvidia will supercharge humanoid robot development with Isaac GR00T N1 foundation model for human-like reasoning</div>
                    <div class="item-desc">Nvidia lance Isaac GR00T N1, un modèle d’IA qui permet aux robots humanoïdes d’apprendre, raisonner et s’adapter à des tâches variées. Cette innovation accélère le développement de robots utiles pour l’industrie et la vie quotidienne.</div>
                    <div class="item-link"><a href="https://venturebeat.com/games/nvidia-will-supercharge-humanoid-robot-development-with-isaac-gr00t-n1-foundation-model-for-humanoid-reasoning/?ref=dailydev" target="_blank">Lire l'article</a></div>
                </div>
                <div class="grid-item">
                    <div class="item-image">
                        <img src="images/Tesla-optimus.png" alt="Titre Robot 3">
                    </div>
                    <div class="item-title">Optimus : qu'est-ce que c'est ?</div>
                    <div class="item-desc">Optimus est un robot humanoïde développé par Tesla pour automatiser les tâches répétitives et dangereuses, en usine ou à domicile. Doté d’IA et de capteurs avancés, il vise à assister les humains tout en soulevant des enjeux éthiques et sociaux sur l’emploi et la sécurité.</div>
                    <div class="item-link"><a href="https://www.futura-sciences.com/tech/definitions/robotique-optimus-21522/#enjeux-ethiques-et-sociaux" target="_blank">Lire l'article</a></div>
                </div>
                <div class="grid-item">
                    <div class="item-image">
                        <img src="images/code_as_policy.png" alt="Titre Robot 4">
                    </div>
                    <div class="item-title">Google's Code-as-Policies Lets Robots Write Their Own Code</div>
                    <div class="item-desc">Google a développé Code-as-Policies, une méthode où un modèle de langage génère directement du code pour contrôler des robots selon des instructions en langage naturel. Cette approche rend les robots plus polyvalents, mais pose aussi des défis de sécurité et de fiabilité.</div>
                    <div class="item-link"><a href="https://www.infoq.com/news/2022/11/google-robotics-code-policies/?utm_campaign=infoq_content&utm_source=infoq&utm_medium=feed&utm_term=global&ref=dailydev" target="_blank">Lire l'article</a></div>
                </div>
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
            ['ai', 'robotics'].forEach(t => {
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