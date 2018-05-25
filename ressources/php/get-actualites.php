<?php
    function apercuContenu ($origine) {
      if (strlen ($origine) <= 200)
          return $origine;

      /*$debut = substr ($origine, 0, 400);
      $debut = substr ($debut, 0, strrpos ($debut, ' ')) . '...';*/
      $content = strip_tags($origine, '<h2><img><h3><p>');
      $posFin = strpos($content, '</', 200);
      $posDeb = strpos($content, '>', $posFin);
      $fin = substr($content, $posFin, ($posDeb - $posFin) + 1);

      $debut = substr($content, 0, $posFin);

      return $debut.$fin;
    }

    function apercuContenu2 ($origine) {
      if (strlen ($origine) <= 400)
          return $origine;

      $content = strip_tags($origine, '<h2><img><h3><p>');
      $debut = substr ($content, 0, 400);
      $debut = substr ($debut, 0, strrpos ($debut, ' ')) . '...';

      return $debut;
    }

  function getActualites() {
    include 'bdd.php';
    /*
    $connection = new PDO('mysql:host=localhost;dbname=geo2r;charset=utf8', 'root', '') or die(mysql_error());
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/
		$query = 'SELECT * FROM actualites ORDER BY datePost DESC LIMIT 5';
		$stmt = $connection->prepare($query);
		$stmt->execute();
		$lesActualites = $stmt->fetchAll();
		return $lesActualites;
	}

  function getFullActualites() {
    include 'bdd.php';
		$query = 'SELECT * FROM actualites ORDER BY datePost DESC LIMIT 5';
		$stmt = $connection->prepare($query);
		$stmt->execute();
		$lesActualites = $stmt->fetchAll();
		return $lesActualites;
	}

  function getActualiteById($id) {
    include 'bdd.php';
		$query = 'SELECT * FROM actualites WHERE id=?';
		$stmt = $connection->prepare($query);
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
		$stmt->execute();
		$actu = $stmt->fetch();
		return $actu;
  }
?>
