<!DOCTYPE html>
<html>
<head>
    <title>Liczby podzielne przez 3 i 7</title>
</head>
<body>
    <form method="post" action="">
        <label for="x">Podaj x:</label>
        <input type="number" name="x" id="x" required>
        <br>
        <label for="y">Podaj y:</label>
        <input type="number" name="y" id="y" required>
        <br>
        <input type="submit" value="Wyświetl liczby">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = intval($_POST["x"]);
        $y = intval($_POST["y"]);

        echo "<h3>Liczby podzielne przez 3 i 7 w przedziale od $x do $y:</h3>";
        for ($i = $x; $i <= $y; $i++) {
            if ($i % 3 == 0 && $i % 7 == 0) {
                echo "$i<br>";
            }
        }
    }
    ?>
</body>
</html>
