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
                    Calculatrice d'email
                </h2>
                
            </div>
        </div>
        <div class="container ">
            <div class="row carreau">
                <img src="../images/Calculatrice_email.PNG" alt="interface de la calculatrice d'email" >
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

                    <p><strong><h3 class="centered-text">Déroulement de la mission :</h3></strong></p>
                    <p class="centered-text">
                    Dans le cadre de mes missions en entreprise, la tâche de créer un outil permettant de contrôler le taux de sollicitation des collaborateurs du siège par les collaborateurs d’agence m'a été confiée. L’objectif était d’enregistrer, via Excel et VBA, le nombre de mails envoyés et reçus par chaque adresse mail du siège, afin d’analyser la fréquence des demandes. Cet outil vise à aider les responsables à identifier les situations de surcharge et à mettre en place des solutions pour réduire ces sollicitations si nécessaire.
                </p>

                    <p><strong><h3 class="centered-text">Étapes réalisées :</h3></strong></p>
                    <p class="centered-text">Conception et développement de l’interface utilisateur sous Excel</p>
                    <p class="centered-text">Programmation en VBA pour l’automatisation de la récupération et du traitement des données (mails envoyés/reçus)</p>
                    <p class="centered-text">Réalisation de tests fonctionnels et validation de l’outil</p>
                    <p><strong><h3 class="centered-text">Langages utilisés : </h3></strong></p>
                    <div class="image-container">
                    <img src="<?php echo $root_path; ?>images/excel.png" alt="logo excel">
                    <img src="../images/vba.png" alt="logo vba">
                    </div>
                    <p><strong><h3 class="centered-text">Compétences développées :</h3></strong> </p>
                    <p class="centered-text">Maîtrise du langage VBA pour Excel</p>
                    <p class="centered-text">Conception et développement d'applications sous Excel</p>
                    <p class="centered-text">Tests et débogage d'applications</p>


                    </div>
                    <div class="btn-box">

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