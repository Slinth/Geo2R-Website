<?php
  $content = $_POST['content'];
  $title = $_POST['title'];
  $id = $_POST['id'];

  include 'bdd.php';

  if (isset($content)) {
    echo $id;
    echo $content;
    $query = 'UPDATE actualites SET title=?, content=? WHERE id=?';
    $req = $connection->prepare($query);
    $req->bindValue(1, $title, PDO::PARAM_STR);
    $req->bindValue(2, $content, PDO::PARAM_STR);
    $req->bindValue(3, $id, PDO::PARAM_INT);
    $res = $req->execute();

    if($res) {
      header("Location:../../administrator/index.php?success=2");
    } else {
      header("Location:../../administrator/index.php?success=0");
    }
  }
?>
