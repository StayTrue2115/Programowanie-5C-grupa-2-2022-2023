<!DOCTYPE html>
<html>
<head>
    <title>Generowanie tabeli HTML</title>
</head>
<body>
    <form method="post" action="">
        <label for="rows">Liczba wierszy:</label>
        <input type="number" name="rows" id="rows" required>
        <br>
        <label for="columns">Liczba kolumn:</label>
        <input type="number" name="columns" id="columns" required>
        <br>
        <input type="submit" value="Generuj tabelę">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rows = intval($_POST["rows"]);
        $columns = intval($_POST["columns"]);

        echo "<table border='1'>";
        for ($i = 1; $i <= $rows; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $columns; $j++) {
                echo "<td>Wiersz $i, Kolumna $j</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
