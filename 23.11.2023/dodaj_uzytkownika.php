<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dodawanie</title>
</head>
<body>
    <?php
    session_start();
    if(!isset($_SESSION['user_id']) || 
    $_SESSION['role'] !== 'admin'){
        header("Location: index.php");
        exit();
    }
    ?>
</body>
</html>