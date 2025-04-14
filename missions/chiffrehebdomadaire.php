<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="../images/fevicon.png" type="image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Portfolio BTS SIO | Quentin ETOURMY - Calculatrice d'email</title>

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <link href="../css/font-awesome.min.css" rel="stylesheet" />

    <link href="../css/style.css" rel="stylesheet" />
    <link href="../css/responsive.css" rel="stylesheet" />
    <link href="../css/new.css" rel="stylesheet" />

    <style>
        /* Styles pour agrandir le carré contenant l'image */
        .carreau {
            display: flex;
            justify-content: center; /* Centre l'image horizontalement */
            width: 80%; /* Augmente la largeur du conteneur */
            margin: 0 auto; /* Centre le conteneur sur la page */
        }

        .carreau img {
            max-width: 100%; /* L'image ne dépassera pas la largeur de son conteneur */
            height: auto; /* Garde les proportions de l'image */
            display: block; /* Supprime l'espace sous l'image */
        }

        /* Styles pour centrer le texte h3 */
        .centered-text {
            text-align: center;
        }

        /* Styles pour aligner les images de langages */
        .image-container {
            display: flex;
            justify-content: center; /* Centre les images horizontalement */
            gap: 10px; /* Ajoute un espace entre les images */
        }

        .image-container img {
            max-width: 50px; /* Ajustez la taille des logos si nécessaire */
            height: auto;
        }

        /* Style pour le titre contexte au-dessus des étapes */
        .titre-contexte {
            text-align: center;
            margin-bottom: 15px; /* Ajoute un espace en dessous du titre */
            font-size: 1.5em; /* Ajustez la taille du titre si nécessaire */
            font-weight: bold;
        }
    </style>

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
                    Chiffre hebdomadaire
                </h2>
                
            </div>
        </div>
        <div class="container ">
            <div class="row carreau">
                <img src="../images/netflixmaquette.png" alt="interface de la calculatrice d'email" >
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
            <div class="cadre">

                    <div class="detail-box encadrement">

                    <p><strong><h3 class="centered-text">Déroulement du projet:</h3></strong></p>
                    <p class="centered-text">
                    Ce projet consistait à créer une calculatrice d'email fonctionnelle en utilisant Microsoft Excel et le langage VBA (Visual Basic for Applications). L'objectif était de simplifier le processus de calcul et de gestion des adresses e-mail pour des besoins spécifiques.
                </p>

                    <p><strong><h3 class="centered-text">Étapes réalisées :</h3></strong></p>
                    <p class="centered-text">Conception de la logique de calcul des emails en VBA</p>
                    <p class="centered-text">Développement de l'interface utilisateur sous Excel</p>
                    <p class="centered-text">Implémentation des fonctionnalités de la calculatrice</p>
                    <p class="centered-text">Tests et validation du bon fonctionnement</p>
                    <p><strong><h3 class="centered-text">Langages utilisés : </h3></strong></p>
                    <div class="image-container">
                    <img src="<?php echo $root_path; ?>images/excel.png" alt="logo excel">
                    <img src="../images/vba.png" alt="logo vba">
                    </div>
                    <p><strong><h3 class="centered-text">Compétences développées :</h3></strong> </p>
                    <p class="centered-text">Maîtrise du langage VBA pour Excel</p>
                    <p class="centered-text">Conception et développement d'applications sous Excel</p>
                    <p class="centered-text">Gestion de la logique de calcul</p>
                    <p class="centered-text">Tests et débogage d'applications</p>


                    </div>
                    <div class="btn-box">

                    </div>
                    </div>
        <div class="price_container ">
            <div class="box">

                <div class="btn-box">
                    <a href="#" target="_blank">
                        Aperçu de l'application (si disponible)
                    </a>
                </div>
            </div>
            <div class="box">

                <div class="btn-box">
                    <a href="#" target="_blank">
                        Visualisation du code (si applicable)
                    </a>
                </div>
            </div>
        </div>
        </div>
    </section>


    <?php
    include_once "../footer.php";
    ?>


    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/custom.js"></script>


</body>

</html>