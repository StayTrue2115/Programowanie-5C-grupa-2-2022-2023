<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
</head>
<body>
    <?php
     session_start();
     if (!isset($_SESSION['user_id'])) {
        header("Location: index.php");
        exit();
     }
     $role = $_SESSION['role'];
     ?>
</body>
</html>