<?php
   include('../ressources/php/bdd.php');
   session_start();

   $id = $_SESSION['login_user'];

   $query = 'SELECT username FROM admin WHERE id=?';
   $stmt = $connection->prepare($query);
   $stmt->bindValue(1, $id, PDO::PARAM_INT);
   $stmt->execute();
   $row = $stmt->fetch();

   $login_session = $row['username'];

   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>
