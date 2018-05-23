<?php
  $content = $_POST['content'];
  $title = $_POST['title'];

  include 'bdd.php';

  /*$connection = new PDO('mysql:host=localhost;dbname=geo2r;charset=utf8', 'root', '') or die(mysql_error());
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/

  if (isset($content)) {
    $query = 'INSERT INTO actualites(title, content) VALUES (?, ?)';
    $req = $connection->prepare($query);
    $req->bindValue(1, $title, PDO::PARAM_STR);
    $req->bindValue(2, $content, PDO::PARAM_STR);
    $res = $req->execute();


    if($res) {
      header("Location:../../administrator/index.php?success=1");
    } else {
      header("Location:../../administrator/index.php?success=0");
    }
  }
?>
