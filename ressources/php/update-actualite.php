<?php
  $content = $_POST['content'];
  $id = $_POST['id'];

  include 'bdd.php';

  if (isset($content)) {
    echo $id;
    echo $content;
    $query = 'UPDATE actualites SET content=? WHERE id=?';
    $req = $connection->prepare($query);
    $req->bindValue(1, $content, PDO::PARAM_STR);
    $req->bindValue(2, $id, PDO::PARAM_INT);
    $res = $req->execute();

    if($res) {
      header("Location:../../administrator/index.php?success=2");
    } else {
      header("Location:../../administrator/index.php?success=0");
    }
  }
?>
