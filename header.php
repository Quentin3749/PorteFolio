

<?php
// Définir le nom du fichier de la page actuelle
$page_actuelle = basename($_SERVER['PHP_SELF']);
?>

<head>
  <!-- Balises de base -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Métas mobiles -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Métas du site -->
  <link rel="icon" href="images/eclaireur.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="auteur" content="" />

  <title>Portfolio BTS SIO | Quentin ETOURMY</title>

  <!-- CSS core bootstrap -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- style de polices -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- style font awesome -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Styles personnalisés pour ce modèle -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- style responsive -->
  <link href="css/new.css" rel="stylesheet"/>
  <link rel="stylesheet" href="/css/style.css">

  <!-- CSS supplémentaire pour la mise en évidence de la page active -->
  <style>
    .nav-item.actif .nav-link::after {
      content: '';
      display: block;
      width: 100%;
      height: 3px;
      background-color: gold; /* Vous pouvez modifier cette couleur */
      margin-top: 1px;
    }
  </style>
</head>

<body>
<header class="header_section bg-dark">
  <div class="container-fluid bg-dark text-white">
    <nav class="navbar navbar-expand-lg custom_nav-container bg-dark text-white">
      <a class="navbar-brand" href="index.php">
        <span>Quentin ETOURMY</span>
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Ouvrir la navigation">
        <span class=""> </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?php echo ($page_actuelle == 'index.php') ? 'actif' : ''; ?> highlight-white">
            <a class="nav-link" href="<?php echo $root_path; ?>index.php">Accueil<span class="sr-only">(page courante)</span></a>
          </li>
          <li class="nav-item <?php echo ($page_actuelle == 'tableau.php') ? 'actif' : ''; ?> highlight-gold">
            <a class="nav-link" href="<?php echo $root_path; ?>tableau.php">Tableaux de synthèse Bloc 1</a>
          </li>
          <li class="nav-item <?php echo ($page_actuelle == 'competence.php') ? 'actif' : ''; ?> competence highlight-white">
            <a class="nav-link" href="<?php echo $root_path; ?>competence.php">Compétences</a>
            
          </li>
          <li class="nav-item <?php echo ($page_actuelle == 'entreprise.php') ? 'actif' : ''; ?> highlight-white">
            <a class="nav-link" href="<?php echo $root_path; ?>entreprise.php">Entreprise</a>
          </li>
          <li class="nav-item <?php echo ($page_actuelle == 'projet.php') ? 'actif' : ''; ?> highlight-white">
            <a class="nav-link" href="<?php echo $root_path; ?>projet.php">Projets</a>
          </li>
          <li class="nav-item <?php echo ($page_actuelle == 'travaux.php') ? 'actif' : ''; ?> highlight-white">
            <a class="nav-link" href="<?php echo $root_path; ?>travaux.php">travaux</a>
          </li>
          <li class="nav-item <?php echo ($page_actuelle == 'veille.php') ? 'actif' : ''; ?> highlight-white">
            <a class="nav-link" href="<?php echo $root_path; ?>veille.php">Veille</a>
          </li>
          <li class="nav-item <?php echo ($page_actuelle == 'contact.php') ? 'actif' : ''; ?> highlight-white">
            <a class="nav-link" href="<?php echo $root_path; ?>contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>