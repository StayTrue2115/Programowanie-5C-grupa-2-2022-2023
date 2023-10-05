<!DOCTYPE html>
<html>
<head>
    <title>Suma liczb nieparzystych</title>
</head>
<body>
    <form method="post" action="">
        <label for="x">Podaj x:</label>
        <input type="number" name="x" id="x" required>
        <br>
        <label for="y">Podaj y:</label>
        <input type="number" name="y" id="y" required>
        <br>
        <input type="submit" value="Oblicz sumę">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = intval($_POST["x"]);
        $y = intval($_POST["y"]);
        $sum = 0;

        echo "<h3>Suma liczb nieparzystych od $x do $y:</h3>";

        for ($i = $x; $i <= $y; $i++) {
            if ($i % 2 != 0) {
                $sum += $i;
                echo "$i ";
            }
        }

        echo "= $sum";
    }
    ?>
</body>
</html>
