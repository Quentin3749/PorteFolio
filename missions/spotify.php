<!DOCTYPE html>
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

  <div class="hero_area">
  <section class="service_section layout_padding" id="maquette-apple-section">

    <div class="container">
      <div class="heading_container heading_center">
        <h2 class="projet project">
          Maquette Spotify
        </h2>
      </div>
    </div>
    <div class="container ">
      <div class="row carreau">
              <img src="../images/spotifymaquette.png" alt="apple" >
      </div>
    </div>
  </section>

  <section class="price_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h1 class="descriptifs">
          descriptifs
        </h1>
      </div>
      <div class="cadre">
              
                <div class="detail-box encadrement">
                
                <p><strong><h3 class="centered-text">Étapes réalisées :</h3></strong></p>
                <p class="centered-text">Conception du squelette de la page en HTML</p>
                <p class="centered-text">Stylisation avec CSS</p>
                <p><strong><h3 class="centered-text">Langages utilisés : </h3></strong></p>
                <div class="image-container">
                <img src="<?php echo $root_path; ?>images/HTML5_logo.png" alt="logo html">
                <img src="../images/CSS3_logo.png" alt="logo css">
                </div>
                <p><strong><h3 class="centered-text">Compétences développées :</h3></strong> </p>
                <p class="centered-text">Maîtrise des bases du HTML</p>
                <p class="centered-text">Maîtrise du CSS </p>


                 
                </div>
                  <div class="btn-box">
                  
                  </div>
                </div>
      <div class="price_container ">
        <div class="box">
          
          <div class="btn-box">
            <a href="https://quentin3749.github.io/maquette-spotify/" target="_blank">
              résultat final
            </a>
          </div>
        </div>
        <div class="box">
         
          <div class="btn-box">
            <a href="https://github.com/Quentin3749/maquette-spotify" target="_blank">
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
