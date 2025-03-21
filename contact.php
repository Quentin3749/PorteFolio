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
$root_path = "";
include_once "header.php";
?>

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>Contactez-moi</h2>
      </div>
      <div class="row">
        <!-- Left Column -->
        <div class="col-lg-6">
          <div class="info">
            <!-- Social Media Links -->
            <div class="social-links">
              <h4>Suivez-moi :</h4>
              <a href="https://www.instagram.com/quentindevweb?igsh=NXpybHZmdGRqd3M4" target="_blank"><i class="fa fa-instagram"></i></a>
              <a href="https://github.com/Quentin3749" target="_blank"><i class="fa fa-github"></i></a>
              <a href="https://www.linkedin.com/in/quentin-etourmy-5325571b4/" target="_blank"><i class="fa fa-linkedin"></i></a>
              <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
            </div>

            <!-- Contact Information -->
            

            <div class="email">
              <i class="fa fa-envelope"></i><h4>Email :</h4>
              <p><a href="mailto:q.etourmy.pro@gmail.com">q.etourmy.pro@gmail.com</a></p>
            </div>

            <div class="phone">
              <i class="fa fa-phone"></i>
              <h4>Téléphone :</h4>
              <p><a href="tel:0666140727">06 66 14 07 27</a></p>
            </div>

            <!-- Map -->
            <div class="address">
              <h4>Localisation :</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43204.285814768805!2d-0.586606061335501!3d47.47398838335978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480878647434fd45%3A0xa73563241afadf0!2sAngers!5e0!3m2!1sfr!2sfr!4v1714597444997!5m2!1sfr!2sfr" 
              width="100%" 
              height="300" 
              style="border:0;" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade" 
              title="Google Map of Angers">
            </iframe>
            </div>
          </div>
        </div>

        <!-- Right Column -->
        <div class="col-lg-6">
          <div class="form_container">
            <form target="_blank" action="https://formsubmit.co/q.etourmy.pro@gmail.com" method="POST">
              <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Votre Nom" required>
              </div>

              <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Votre Email" required>
              </div>

              <div class="form-group">
                <label for="message">Message :</label>
                <textarea id="message" name="message" class="form-control" rows="6" placeholder="Votre Message" required></textarea>
              </div>

              <div class="btn_box mt-3">
                <button type="submit" class="btn btn-dark">Envoyer</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php 
include_once "footer.php";
?>




<!-- jQuery -->
<script src="js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap JS -->
<script src="js/bootstrap.js"></script>
<!-- Custom JS -->
<script src="js/custom.js"></script>

</body>
</html>
