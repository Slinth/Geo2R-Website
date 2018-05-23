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
      <meta property="og:description" content="Descrition de l'actu pour le test de partage"/>
      <meta property="og:type" content="Article" />
      <meta property="og:url" content="http://www.geo2r.com/actualites?id=<?php echo $id ?>" />
      <meta property="og:image" content="http://www.geo2r.com/ressources/images/logo-geo2r-blanc.png" />
    <?php }?>

    <!-- LinkedIn Sharing JavaScript -->
    <script type="text/javascript" src="//platform.linkedin.com/in.js">
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
    <link href="../ressources/css/actualites.css" rel="stylesheet">
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
            <a href="http://www.linkedin.com/shareArticle?url=<?php echo $actual_link ?>" onclick="window.open(this.href, 'linkedinwindow','left=20,top=20,width=600,height=700,toolbar=0,resizable=1'); return false;">Post on LinkedIn</a>
            <a href="https://www.facebook.com/sharer.php?u=<?php echo $actual_link ?>" target="blank">FB V1</a>
            <a href="https://www.facebook.com/dialog/share?app_id=411317722664907&display=popup&href=<?php echo $actual_link ?>&redirect_uri=<?php echo $actual_link ?>" target="blank">FB V2</a>
          </div>
    <?php
        } else {
          $actus = getActualites();
            foreach ($actus as $actu) {	?>
              <div class="actu">
                <h1><?php echo $actu['title'] ?></h1>
                <?php echo apercuContenu($actu['content'], $actu['id']) ?>
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

    <!-- LinkedIn Sharing JavaScript -->
<script type="text/javascript">

  // Setup an event listener to make an API call once auth is complete
    function onLinkedInLoad() {
      IN.Event.on(IN, "auth", shareContent);
    }

  // Handle the successful return from the API call
  function onSuccess(data) {
    console.log(data);
  }

  // Handle an error response from the API call
  function onError(error) {
    console.log(error);
  }

  // Use the API call wrapper to share content on LinkedIn
  function shareContent() {

    // Build the JSON payload containing the content to be shared
    var payload = {
      "comment": "Check out developer.linkedin.com! http://linkd.in/1FC2PyG",
      "visibility": {
        "code": "anyone"
      }
    };

    IN.API.Raw("/people/~/shares?format=json")
      .method("POST")
      .body(JSON.stringify(payload))
      .result(onSuccess)
      .error(onError);
  }

</script>

    <!-- Custom JavaScript -->
    <script src="../ressources/js/animations.js"></script>
    </body>
  </html>
