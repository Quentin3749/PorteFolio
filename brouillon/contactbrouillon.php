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

<body class="sub_page">

<?php 
include_once "header.php";
?>

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Contactez moi
        </h2>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" placeholder="Your Name" />
              </div>
              <div>
                <input type="email" placeholder="Your Email" />
              </div>
              <div>
                <input type="text" placeholder="Your Phone" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box ">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>





  <section style=" background: linear-gradient(to bottom, #bdcdd0, #ffffff);" id="contact" class="contact">
    <div class="container">
      <div class="section-title">
        <h2>Contact</h2>
        <p>N’hésitez pas à me contacter pour toutes questions ou renseignements complémentaires via ce formulaire.</p>
      </div>
      <div class="row aos-init aos-animate" data-aos="fade-in">
        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Localisation :</h4>
              <p>49 - Angers, France</p>
            </div>
            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email :</h4>
              <p><a style="color: #173b6c" href="mailto:q.etourmy.pro@gmail.com">q.etourmy.pro@gmail.com</q.etourmy.pro@gmail.coma></p>
            </div>
            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Téléphone :</h4>
              <p><a style="color: #173b6c" href="tel:0666140727">06 66 14 07 27</a></p>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43204.285814768805!2d-0.586606061335501!3d47.47398838335978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480878647434fd45%3A0xa73563241afadf0!2sAngers!5e0!3m2!1sfr!2sfr!4v1714597444997!5m2!1sfr!2sfr" 
        width="400" 
        height="300" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade" 
        frameborder="0" 
        title="Google Map of Angers">
</iframe>
          </div>
        </div>
        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <div class="container">
            <h1>Formulaire de Contact</h1>
            <br>
            <form target="_blank" action="https://formsubmit.co/nathan.serror@gmail.com" method="POST">
              <div class="form-group">
                <div class="form-row">
                  <div class="col">
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Votre Nom" required="">
                  </div>
                  <br>
                  <div class="col">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Votre adresse email" required="">
                  </div>
                  <br>
                </div>
              </div>
              <div class="form-group">
                <label for="message">Message :</label>
                <textarea placeholder="Votre message" id="message" class="form-control" name="message" rows="10" required=""></textarea>
              </div>
              <br>
              <button type="submit" class="btn btn-lg btn-dark btn-block">Envoyer</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->

  <?php 
  include_once "footer.php";
  ?>

  <!-- end info section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>


</body>

</html>