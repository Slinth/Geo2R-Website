<!DOCTYPE html>
<html lang="fr" prefix="og: http://ogp.me/ns#">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-61470250-2"></script>
    <script src="../ressources/js/google-analytics.js"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="title" content="Geo2R - Votre spécialiste de l'imagerie technique par drone" />
    <meta name="description" content="Geo2R est spécialiste de l'imagerie et des prises de vue par drone. Nous intervenons sur différents domaines :énergie, BTP , agriculture..." />
    <meta name="keywords" content="actualites">
    <meta name="author" content="">

    <?php include('../ressources/php/get-actualites.php'); ?>

    <?php
      $id = $_GET['id'];
      if (isset($id)) {
        $actu = getActualiteById($id);
    ?>
      <meta property="og:title" content="<?php echo $actu['title'] ?>" />
      <meta property="og:description" content="<?php echo strip_tags($actu['content']); ?>"/>
      <meta property="og:type" content="Article" />
      <meta property="og:url" content="http://dev.geo2r.fr/actualites?id=<?php echo $id ?>" />
      <meta property="og:image" content="http://dev.geo2r.fr/ressources/images/logo-geo2r-noir.jpg" />
    <?php }?>

    <!-- LinkedIn Sharing JavaScript -->
    <script type="text/javascript" src="//platform.linkedin.com/in.js">
      lang: fr_FR
      api_key: 867iyvsbv3rjic
      authorize: true
    </script>

    <link rel="icon" href="../ressources/images/logo.png">

    <title>Geo2R - Votre spécialiste de l'imagerie aérienne par Drone</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- AOS animations CSS -->
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../ressources/css/main.css" rel="stylesheet">
    <link href="../ressources/css/actualites-page.css" rel="stylesheet">
  </head>

  <body>
    <div class="wrapper">
      <!-- Dark navbar -->
      <header class="sticky-top bg-dark">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="home">
            <img id="navbarBrand" src="../../ressources/images/logo-geo2r-blanc-small.png" class="d-inline-block align-top" alt="Geo2R - Imagerie aérienne par Drone">
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
              <li class="nav-item active">
                <a class="nav-link rounded" href="actualites">ACTUALITES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact">CONTACT</a>
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

      <div class="container-title"><h1>ACTUALITES</h1></div>

      <div id="main" class="container">
        <?php
        if (isset($id)) {
          $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"
          ?>
          <div class="actu">
            <h1><?php echo $actu['title'] ?></h1>
            <?php echo $actu['content'] ?>
            <div class="clearfix"></div>
            <small> <?php echo $actu['datePost'] ?></small>
            <div class="share-buttons">
              <div class="fb-share-button" data-href="<?php echo $actual_link ?>" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fdev.geo2r.fr%2Factualites%3Fid%3D%253C%253Fphp%2Becho%2B%2524id%2B%253F%253E&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager</a></div>
              <script type="IN/Share" data-url="<?php echo $actual_link ?>"></script>
            </div>
          </div>
    <?php
        } else {
          $actus = getActualites();
            foreach ($actus as $actu) {	?>
              <div class="actu">
                <h1><?php echo $actu['title'] ?></h1>
                <?php echo apercuContenu($actu['content']) ?>
                <div class="clearfix"></div>
                <div class="bottom">
                  <small> <?php echo $actu['datePost'] ?></small>
                  <a href='actualites?id=<?php echo $actu['id'] ?>'>Lire la suite...</a>
                </div>
              </div>
        <?php }
        } ?>
      </div><!-- /container -->

      <div class="button-floating" data-aos="fade-left" data-aos-anchor="body">
        <a href="contact"><img src="../ressources/images/icon-email" alt="Bouton flottant Contact"></a>
      </div>
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
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img src="../../ressources/images/logo-geo2r-blanc-small.png" alt="Geo2R - Imagerie aérienne par Drone"></div>
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
            <li><a href="contact">Contact</a></li>
          </ul>
        </div>
        <div class="col-12 legals">@2018 Geo2R Tous droits réservés | <a href="#">Mention légales</a></div>
      </div>
    </footer>

    <div class="d-none" id="bootstrapCssTest">bootstrapCssTest</div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- AOS animations JavaScript -->
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

    <!-- jQuery local fallback -->
    <script>window.jQuery || (document.write('<script src="../ressources/js/jquery-3.2.1.min.js"><\/script>') && console.log("JQ : Local"))</script>
    <!-- Bootstrap JS local fallback -->
    <script>if(typeof($.fn.modal) === 'undefined') {document.write('<script src="../ressources/js/bootstrap.min.js"><\/script>');console.log("JS : Local");}</script>
    <!-- Bootstrap CSS local fallback -->
    <script>
      (function($) {
          $(function() {
              if ($('#bootstrapCssTest').is(':visible')) {
                  $('head').prepend('<link rel="stylesheet" href="../ressources/css/bootstrap.min.css">');
                  console.log("CSS : Local");
              }
          });
      })(window.jQuery);
    </script>
    <!-- AOS Animations local fallback -->
    <script>
      if(typeof(AOS) === 'undefined') {
        document.write('<script src="../ressources/js/aos.js"><\/script>');
        $('head').prepend('<link rel="stylesheet" href="../ressources/css/aos.css">');
        console.log("AOS : local");
      }
    </script>

    <!-- Custom JavaScript -->
    <script src="../ressources/js/animations.js"></script>

    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.0&appId=411317722664907';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    </body>
  </html>
