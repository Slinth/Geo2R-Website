<?php
  function getActualites() {
    include 'bdd.php';
    /*
    $connection = new PDO('mysql:host=localhost;dbname=geo2r;charset=utf8', 'root', '') or die(mysql_error());
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/
		$query = 'SELECT content, datePost FROM actualites ORDER BY datePost DESC LIMIT 5';
		$stmt = $connection->prepare($query);
		$stmt->execute();
		$lesActualites = $stmt->fetchAll();
		return $lesActualites;
	}

  function getAllActualites() {
    include 'bdd.php';
    /*$connection = new PDO('mysql:host=localhost;dbname=geo2r;charset=utf8', 'root', '') or die(mysql_error());
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/
		$query = 'SELECT id, content, datePost FROM actualites ORDER BY datePost DESC LIMIT 5';
		$stmt = $connection->prepare($query);
		$stmt->execute();
		$lesActualites = $stmt->fetchAll();
		return $lesActualites;
	}
?>
