<!DOCTYPE html>
<html lang="fr" prefix="og: http://ogp.me/ns#">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-61470250-2"></script>
    <script src="../ressources/js/google-analytics.js"></script>

    <!-- Google ReCaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="title" content="Geo2R - Votre spécialiste de l'imagerie technique par drone" />
    <meta name="description" content="Geo2R est spécialiste de l'imagerie et des prises de vue par drone. Nous intervenons sur différents domaines :énergie, BTP , agriculture..." />
    <meta name="keywords" content="devis gratuit, contact, contez-nous, coordonnées, adresse">
    <meta name="author" content="">
    <meta property="og:title" content="Contact GEO2R" />
    <meta property="og:type" content="Page de contact" />
    <meta property="og:url" content="http://www.geo2r.com/contact" />
    <meta property="og:image" content="http://www.geo2r.com/ressources/images/logo-geo2r-blanc.png" />
    <link rel="icon" href="../ressources/images/logo.png">

    <title>Geo2R - Votre spécialiste de l'imagerie aérienne par Drone</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- AOS animations CSS -->
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../ressources/css/main.css" rel="stylesheet">
    <link href="../ressources/css/contact-page.css" rel="stylesheet">

    <!-- Script PHP / JS -->
    <?php
      if (isset($_GET['success'])) {
        $success = $_GET['success'];

        if ($success == 1) {
          echo '<script>alert("Votre message a bien été envoyé.");</script>';
        }
      }
    ?>
  </head>

  <body>
    <div class="wrapper">
      <!-- Dark navbar -->
      <header class="sticky-top bg-dark">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="home">
            <img id="navbarBrand" src="../../ressources/images/logo-geo2r-blanc.png" class="d-inline-block align-top" alt="Geo2R - Imagerie aérienne par Drone">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-md-center" id="navbarNavAltMarkup">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="home">ACCUEIL</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SERVICES</a>
                <div class="dropdown-menu" aria-labelledby="dropdown1">
                  <a class="dropdown-item" href="services/cartographie">Cartographie</a>
                  <a class="dropdown-item" href="services/inspection">Inspection</a>
                  <a class="dropdown-item" href="services/modelisation3d">Modélisation 3D</a>
                  <a class="dropdown-item" href="services/integration3d">Intégration 3D</a>
                  <a class="dropdown-item" href="services/audiovisuel">Audiovisuel</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PRESENTATION</a>
                <div class="dropdown-menu" aria-labelledby="dropdown2">
                  <a class="dropdown-item" href="presentation#societe">Société</a>
                  <a class="dropdown-item" href="presentation#equipe">Equipe</a>
                  <a class="dropdown-item" href="presentation#reglementation">Réglementaion</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="actualites">ACTUALITES</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link rounded" href="#">CONTACT</a>
              </li>
            </ul>
            <div class="social-network">
              <a class="navbar-media" href="https://www.facebook.com/pages/GEO2R/809948345759365?fref=ts" data-toggle="popover" data-placement="top" data-content="Facebook">
                <img src="../ressources/images/logo-facebook.png" class="d-inline-block align-top icon-network" alt="logo-facebook">
              </a>
              <a class="navbar-media" href="https://www.linkedin.com/company/geo2r/" data-toggle="popover" data-placement="top" data-content="LinkedIn">
                <img src="../ressources/images/logo-linkedin.png" class="d-inline-block align-top icon-network" alt="logo-linkedin">
              </a>
              <a class="navbar-media" href="https://www.youtube.com/channel/UCEe42DZ5StJjWyXCiRmf0LQ" data-toggle="popover" data-placement="top" data-content="Youtube">
                <img src="../ressources/images/logo-youtube.png" class="d-inline-block align-top icon-network" alt="logo-youtube">
              </a>
            </div>
          </div>
        </nav>
        <progress value="0" max="3000" id="progress-bar"></progress>
      </header>

      <div class="container-title"><h1>CONTACT</h1></div>

      <main class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 centered">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2547.2915290986857!2d3.3790159157028543!3d50.32381207945813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2eaeb9afcd4f7%3A0xe24a71fcb87e414!2s350+Rue+Arthur+Brunet%2C+59220+Denain!5e0!3m2!1sfr!2sfr!4v1524469752886" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 middle-bar">
            <h2>COORDONNEES</h2>
            <ul>
              <li><img src="../ressources/images/icon-account.png" class="icone" alt="Account Icon">Julien GERARD - 06 61 10 67 04</li>
              <li><img src="../ressources/images/icon-account.png" class="icone" alt="Account Icon">Willy FAUCHER - 06 76 83 23 18</li>
              <li><img src="../ressources/images/icon-home.png" class="icone" alt="Home Icon">350 rue Arthur Brunet - 59520 Denain</li>
              <li><img src="../ressources/images/icon-email.png" class="icone" alt="Email Icon">contact@geo2r.com</li>
            </ul>
          </div>
        </div>

        <div class="center-content">
          <div class="row">
            <div class="d-none d-md-block col-lg-4 col-md-4 cross-bar left"></div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <h2>CONTACTEZ NOUS</h2>
            </div>
            <div class="d-none d-md-block col-lg-4 col-md-4 cross-bar right"></div>
          </div>

          <form class="needs-validation" novalidate id="FormContact" action="../ressources/php/send-email.php" method="post">
            <div class="form-row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Prénom" name="prenom" id="input-prenom" required>
                <div class="invalid-feedback">Veuillez renseigner ce champ.</div>
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Nom" name="nom" id="input-nom" required>
                <div class="invalid-feedback">Veuillez renseigner ce champ.</div>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <input type="tel" class="form-control" placeholder="Téléphone" name="tel" id="input-tel" required>
                <div class="invalid-feedback">Veuillez renseigner un numéro de téléphone valide.</div>
              </div>
              <div class="col">
                <input type="email" class="form-control" placeholder="Email" name="mail" id="input-email" required>
                <div class="invalid-feedback">Veuillez saisir une adresse mail valide.</div>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <textarea class="form-control" rows="3" placeholder="Message" name="message" id="input-message" required></textarea>
                <div class="invalid-feedback">Veuillez saisir un message.</div>
              </div>
            </div>
            <div>
              <div align="center" class="g-recaptcha" data-sitekey="6LdDrVoUAAAAAMUQ7DAGQN0YNFiKxjq4YCGR_Cka"></div>
              <div class="invalid-feedback centered" id="captcha-feedback">Veuillez compléter la vérification anti-spam.</div>
            </div>
            <p><button type="submit" class="btn btn-orange" onclick="submitV2()">Envoyer</button></p>
          </form>
        </div>
      </main> <!-- /container -->
    </div> <!-- /wrapper -->

    <!-- Footer -->
    <footer class="footer">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 content">
          <p class="left">COORDONNEES</p>
          <ul class="left">
            <li>350 rue Arthur Brunet - 59520 Denain</li>
            <li>06 61 10 67 04</li>
            <li>06 76 83 23 18</li>
            <li>contact@geo2r.com</li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img src="../../ressources/images/logo-geo2r-blanc.png" alt="Geo2R - Imagerie aérienne par Drone"></div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 content">
          <p class="right">PLAN DU SITE</p>
          <ul class="right">
            <li><a href="home">Accueil</a></li>
            <li class="dropleft">
              <a class="dropdown-toggle" href="#" id="dropdown3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
              <div class="dropdown-menu" aria-labelledby="dropdown3">
                <a class="dropdown-item" href="services/cartographie">Cartographie</a>
                <a class="dropdown-item" href="services/inspection">Inspection</a>
                <a class="dropdown-item" href="services/modelisation3d">Modélisation 3D</a>
                <a class="dropdown-item" href="services/integration3d">Intégration 3D</a>
                <a class="dropdown-item" href="services/audiovisuel">Audiovisuel</a>
              </div>
            </li>
            <li><a href="presentation">Présentation</a></li>
            <li><a href="#">Actualités</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        <div class="col-12 legals">@2018 Geo2R Tous droits réservés | <a href="mentions-legales">Mention légales</a></div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- AOS animations JavaScript -->
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script src="../ressources/js/animations.js"></script>
    <!-- Custom JavaScript -->
    <script src="../ressources/js/validation-form-contact.js"></script>
  </body>
</html>
