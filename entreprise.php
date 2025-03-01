<!DOCTYPE html>
<html>

<body class="sub_page page-maquette">

<?php 
include_once "header.php";
?>
  <!-- About section -->

  <div class="hero_area">
  
    <section class="slider_section">
    
      <div id="customCarousel1">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <!-- Texte sur l'entreprise -->
                <div class="col-md-6">
                  <div class="detail-box">
                  <h1>Entreprise</h1>
                    <p><strong><h3>Nom :</h3></strong> AXA France</p>
                    <p><strong><h3>Directeur général</h3></strong> Guillaume Borie</p>
                    <p><strong><h3>Siège Social :</h3></strong> 203/205 rue Carnot, 94 138 Fontenay-Sous-Boi</p>
                    <p><strong><h3>Effectifs :</h3></strong>  34 000 en France</p>
                    <p><strong><h3>Secteur d'activité :</h3></strong> Assurance</p>
                  </div>
                </div>

                <!-- Logo AXA -->
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-lg-8 mx-auto">
                      <div class="img-box">
                        <a href="https://www.axa.fr/">
                          <img class="slider-img" id="portrait" src="images/logo_axa.png" alt="AXA Logo">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Nouvelle section histoire, mission et aujourd'hui -->
    <section class="slider_section un">
      <div id="customCarousel1" >
        
            <div class="container">
              <div class="row">
                
                  <div class="detail-box encadre">
                  <h4> Histoire:</h4>
                    <p class="about_text">Venant de la fusion de plusieurs société,<a href="https://www.axa.fr/qui-sommes-nous/chiffres-cles.html#:~:text=Le%20groupe%20AXA%20est%20pr%C3%A9sent,attentes%2C%20o%C3%B9%20que%20vous%20soyez.">AXA </a> est une entreprise française spécialisée dans le secteur de l'assurance, qui a vu le jour en 1981 présente dans 51 pays. Elle emploie 94 700 collaborateurs à travers le monde, dont 34 000 en France. Le groupe est dirigé par M. Thomas Buberl, Directeur général.</p>
                    <h4> Inovation:</h4>
                    <p class="about_text">AXA accélère sa transformation numérique avec des initiatives clés pour répondre aux besoins des clients. En 2022, le groupe a lancé la "Digital Commercial Platform" pour améliorer la prévention des risques et l'indemnisation des entreprises grâce aux données en temps réel. AXA innove également en matière de durabilité avec le programme "AXA Climate", incluant la "Climate School" qui forme des employés d'entreprises pour leur transition durable. Ces initiatives montrent la volonté d’AXA d’aller au-delà de l’assurance en investissant dans des technologies et programmes innovants.</p>
                    <h4> Missions:</h4>
                    <p> En tant qu'alternant, j'ai rejoint une équipe transversale nommée OPTIMUS, chargée d'accompagner plusieurs équipes dans leurs missions. Nous mettons à leur disposition divers outils, tels qu'un extracteur de données, une calculatrice Excel permettant de créer des plans en vue de dessus des bâtiments à assurer, un outil de gestion des emplois du temps des équipes, ainsi que des rapports statistiques sur les activités réalisées. Nous veillons également à la mise à jour du site intranet destiné aux collaborateurs.
                    </p>
                    <div class="btn-box">
                    
                    </div>
                  </div>
               
              </div>
            </div>
          </div>
          
          
        
      </div>
    </section>

  </div>

  <!-- End About section -->

  <!-- Info section -->
  <?php 
  include_once "footer.php";
  ?>
  <!-- End Info section -->

  <!-- Footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- End footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script>

</body>

</html>
