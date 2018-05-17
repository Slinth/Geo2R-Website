<?php
  $content = $_POST['content'];

  include 'bdd.php';

  /*$connection = new PDO('mysql:host=localhost;dbname=geo2r;charset=utf8', 'root', '') or die(mysql_error());
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/

  $query = 'INSERT INTO actualites(content) VALUES (?)';
  $req = $connection->prepare($query);
  $req->bindValue(1, $content, PDO::PARAM_STR);
  $req->execute();
?>
