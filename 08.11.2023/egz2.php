<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wybór języka</title>
</head>
<body>
    <?php
    $jezyk = "n";

    if ($jezyk =="a"){
        echo "język: angielski";
    }elseif ($jezyk =="n"){
        echo "język: niemiecki";
    }elseif($jezyk =="h"){
        echo "język: hiszpański";
    }else{
        echo "język: polski";
    }
    ?>
</body>
</html>