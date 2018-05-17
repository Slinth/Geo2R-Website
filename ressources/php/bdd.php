<?php
  global $connection;
  $connection = new PDO('mysql:host=georcomogd60.mysql.db;dbname=georcomogd60;charset=utf8', 'georcomogd60', 'geOdeuxR9') or die(mysql_error());
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
