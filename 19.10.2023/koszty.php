<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>koszty</title>
</head>
<body>
    <?php
    if (!empty($_POST)){
        @$cena = $_POST["ben"];
        @$trasa = $_POST["km"];
        @$spalanie = $_POST["spal"];

        if(is_float($cena + 0)&&is_float($spalanie + 0)){
            $s = $spalanie/100;
            $x = $s * $trasa;
            $koszt = $x * $cena;
            
            echo "Koszt dojazdu: " . $cena;
            echo "</br>";
            echo "Długość drogi: " . $trasa;
            echo "</br>";
            echo "Spalanie : " . $spalanie;
            echo "</br>";
            echo "Koszt przejazdu : " . round($koszt, 2) . "zł";
        }else{
            echo "błędne informacjie ";
        }
    }
    ?>
</body>
</html>