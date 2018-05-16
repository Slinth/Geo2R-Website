<?php
  $titre = $_POST['titre'];
  $texte = $_POST['texte'];

  $connection = new PDO('mysql:host=localhost;dbname=geo2r;charset=utf8', 'root', '') or die(mysql_error());
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $query = 'INSERT INTO Actualites(titre, texte) VALUES (?, ?)';
  $req = $connection->prepare($query);
  $req->bindValue(1, $titre, PDO::PARAM_STR);
  $req->bindValue(2, $texte, PDO::PARAM_STR);
  $req->execute();
?>
