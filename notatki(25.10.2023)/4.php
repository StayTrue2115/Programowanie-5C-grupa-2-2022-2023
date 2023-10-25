<?php
    if(!isset($_COOKIE['hits'])) {
        $ile = 1;
    } else {
        $ile = (int)$_COOKIE['hits'];
        if($ile < 1)
        $ile = 1;
        $ile++;
    }
    setcookie("hits" , "$ile");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        if($ile == 1)
            $str = "raz";
        else
        $str = "razy";
        echo "Witamy, odwiedziłeś nas $ile $str.";
        ?>

    </p>
</body>
</html>