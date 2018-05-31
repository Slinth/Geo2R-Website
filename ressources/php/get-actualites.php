<?php
  function strip_tags_content($text, $tags = '', $invert = FALSE) {
    preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($tags), $tags);
    $tags = array_unique($tags[1]);

    if(is_array($tags) AND count($tags) > 0) {
      if($invert == FALSE) {
        return preg_replace('@<(?!(?:'. implode('|', $tags) .')\b)(\w+)\b.*?>.*?</\1>@si', '', $text);
      }
      else {
        return preg_replace('@<('. implode('|', $tags) .')\b.*?>.*?</\1>@si', '', $text);
      }
    }
    elseif($invert == FALSE) {
      return preg_replace('@<(\w+)\b.*?>.*?</\1>@si', '', $text);
    }
    return $text;
  }

  function apercuContenu ($origine) {
    if (strlen ($origine) <= 300)
        return $origine;

    $content = strip_tags_content($origine, '<h2><h3><p><strong>');
    $posFin = strpos($content, '</', 300);
    $posDeb = strpos($content, '>', $posFin);
    $fin = substr($content, $posFin, ($posDeb - $posFin) + 1)."...";

    $debut = substr($content, 0, $posFin);

    return $debut.$fin;
  }

  function getActualites() {
    include 'bdd.php';
    /*
    $connection = new PDO('mysql:host=localhost;dbname=geo2r;charset=utf8', 'root', '') or die(mysql_error());
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/
		$query = 'SELECT * FROM actualites ORDER BY datePost DESC';
		$stmt = $connection->prepare($query);
		$stmt->execute();
		$lesActualites = $stmt->fetchAll();
		return $lesActualites;
	}

  function getFullActualites() {
    include 'bdd.php';
		$query = 'SELECT * FROM actualites ORDER BY datePost DESC';
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
