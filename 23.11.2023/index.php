<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   session_start();
   if (isset($_SESSION['user_id'])) {
       header("Location: menu.php");
       exit();
   }


   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $login = $_POST['login'];
       $password = $_POST['password'];


       if ($user_exists) {
           $_SESSION['user_id'] = $user_id;
           $_SESSION['role'] = $user_role;
           header("Location: menu.php");
           exit();
       } else {
           $error_message = "Nieprawidłowy login lub hasło";
       }
   }
   ?>
   
</body>
</html>