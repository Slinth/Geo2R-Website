<?php
   include('session.php');
   $error = "";

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = $_POST['username'];
      $mypassword = $_POST['password'];
      $confirmpassword = $_POST['confirm'];

      if (strcmp($mypassword, $confirmpassword) == 0) {
        $hashPass = password_hash($mypassword, PASSWORD_DEFAULT);

        $query = "INSERT INTO admin(username, password) VALUES (?, ?)";
        $stmt = $connection->prepare($query);
        $stmt->bindValue(1, $myusername, PDO::PARAM_STR);
        $stmt->bindValue(2, $hashPass, PDO::PARAM_STR);
        $stmt->execute();

        if($stmt) {
           header("location: index.php");
        } else {
           $error = "Error while signing up";
        }
      } else {
        $error = "Mots de passe différents";
      }
   }
?>
<html>

   <head>
      <title>Inscription</title>

      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>

   </head>

   <body bgcolor = "#FFFFFF">

      <div align = "center">
         <div style = "width:400px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Inscription</b></div>

            <div style = "margin:30px">

               <form action = "" method = "post">
                  <label>Username : </label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password : </label><input type = "password" name = "password" class = "box" /><br/><br />
                  <label>Confirm password : </label><input type = "password" name = "confirm" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>

               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error ?></div>

            </div>

         </div>

      </div>

   </body>
</html>
