<?php
  $id = $_POST['id'];

  echo $id;

  include 'bdd.php';

  /*$connection = new PDO('mysql:host=localhost;dbname=geo2r;charset=utf8', 'root', '') or die(mysql_error());
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/
	$query = 'DELETE FROM actualites WHERE id=?';
  $req = $connection->prepare($query);
  $req->bindValue(1, $id, PDO::PARAM_INT);
  $req->execute();
?>
