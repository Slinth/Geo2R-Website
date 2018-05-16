<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <meta name="title" content="Geo2R - Votre spécialiste de l'imagerie technique par drone" />
    <meta name="description" content="Geo2R est spécialiste de l'imagerie et des prises de vue par drone. Nous intervenons sur différents domaines :énergie, BTP , agriculture..." />
    <meta name="author" content="">
    <link rel="icon" href="../../ressources/images/logo.png">

    <title>Geo2R - Administration</title>

    <!-- Custom styles for this template -->
    <link href="../../ressources/css/main.css" rel="stylesheet">
    <link href="../../ressources/css/actualites.css" rel="stylesheet">

    <?php include('../../ressources/php/get-actualites.php'); ?>
    <script>
      function deleteActu(arg) {
        console.log(arg);
        $.ajax({
         type: "POST",
         url: "../../ressources/php/delete-actualite.php",
         data: { id: arg }
       }).done(function( msg ) {
  alert( "Data Saved: " + msg );
});
      }
   </script>
  </head>

  <body>
      <div id="main" class="container">
        <?php $actus = getAllActualites();
          foreach ($actus as $actu) {	?>
            <div class="actu">
              <h2><?php echo $actu['titre'] ?></h2>
              <small> <?php echo $actu['datePost'] ?></small>
              <button onclick="deleteActu(<?php echo $actu['id'] ?>)">SUPPRIMER</button>
            </div>
        <?php } ?>
      </div><!-- /container -->
    </body>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

  </html>
