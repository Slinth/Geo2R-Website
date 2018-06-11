<html>
  <head>
    <title>Geo2R - Ajouter actualité</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="ckeditor/ckeditor.js"></script>
    <?php include('session.php'); ?>
  </head>

  <body>
    <form method="post" action="../ressources/php/post-actualite.php">
      <input type="text" placeholder="Titre" name="title">
      <textarea name="content" id="editor"></textarea>
      <input type="submit" value="OK">
    </form>
  </body>

  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script>
    CKEDITOR.replace( 'editor', {
      extraPlugins: 'imageuploader'
    });
	</script>
</html >
