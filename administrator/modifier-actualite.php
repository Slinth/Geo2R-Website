<?php
  $id = $_GET['id'];

  if (isset($id)) {
    echo $id;
  } else {
    header("Location:../../administrator/index.php?success=0");
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Geo2R - Modifier actualité</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="ckeditor/ckeditor.js"></script>
  </head>

  <body>
    <form method="post" action="../ressources/php/update-actualite.php">
      <textarea name="content" id="editor">
        <?php
          include '../ressources/php/bdd.php';
          $query = "SELECT content FROM actualites WHERE id=?";
          $req = $connection->prepare($query);
          $req->bindValue(1, $id, PDO::PARAM_INT);
          $req->execute();
          $res = $req->fetch();
          echo $res['content'];
        ?>
      </textarea>
      <input type="hidden" name="id" value="<?php echo $id ?>">
      <input type="submit" value="OK">
    </form>
  </body>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script>
    CKEDITOR.replace( 'editor', {
      extraPlugins: 'imageuploader'
    });
	</script>
</html >
