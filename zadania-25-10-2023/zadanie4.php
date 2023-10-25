<?php
setcookie("username", "Kamil", time() - 3600);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(!isset($_COOKIE["username"])){
        echo "Cookie is deleted!";
    }else{
        echo "Cookie is not deleted!";
    }
    ?>
</body>
</html>