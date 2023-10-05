<!DOCTYPE html>
<html>
<head>
    <title>Zwiększanie i zmniejszanie zmiennej</title>
</head>
<body>
    <form method="post" action="">
        <label for="x">Podaj x:</label>
        <input type="number" name="x" id="x" required>
        <br>
        <label for="y">Podaj y:</label>
        <input type="number" name="y" id="y" required>
        <br>
        <input type="submit" value="Wykonaj">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = intval($_POST["x"]);
        $y = intval($_POST["y"]);
        $i = $x;

        echo "<h3>Pętla for:</h3>";
        for (; $i <= $y; $i += 2) {
            echo "Aktualna wartość: $i<br>";
        }

        echo "<h3>Pętla while:</h3>";
        $i = $x;
        while ($i <= $y) {
            echo "Aktualna wartość: $i<br>";
            $i += 2;
        }

        echo "<h3>Pętla do...while:</h3>";
        $i = $x;
        do {
            echo "Aktualna wartość: $i<br>";
            $i += 2;
        } while ($i <= $y);

        echo "<h3>Zmniejszanie:</h3>";
        for ($i = $y; $i >= 1; $i -= 4) {
            echo "Aktualna wartość: $i<br>";
        }
    }
    ?>
</body>
</html>
