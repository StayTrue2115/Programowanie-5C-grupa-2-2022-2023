<?php
if(!isset($_COOKIE['odw'])){
    $ile = 1;
}else{
    $ile = (int)$_COOKIE['odw'];
    if($ile < 1)
        $ile = 1;
    $ile++;
}
setcookie('odw', "$ile");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        echo "Licznik: $ile <br>";
        if($ile == 10 || $ile == 100 || $ile == 1000){
            echo "Odwiedziłeś stronę już $ile razy!";
        }
        ?>
    </p>
</body>
</html>