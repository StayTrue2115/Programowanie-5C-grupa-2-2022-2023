<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator kosztu przejazdu</title>
</head>
<body>
    <form action="" method="post">
        <label for="fuel_cost">Koszt benzyny (zł):</label>
        <input type="text" name="fuel_cost" id="fuel_cost" required><br>
        <label for="distance">Ilość kilometrów:</label>
        <input type="number" name="distance" id="distance" required><br>
        <label for="fuel_consumption">Średnie spalanie (l/100km):</label>
        <input type="text" name="fuel_consumption" id="fuel_consumption" required><br>
        <input type="submit" value="Oblicz koszt">
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fuel_cost = floatval($_POST["fuel_cost"]);
    $distance = floatval($_POST["distance"]);
    $fuel_consumption = floatval($_POST["fuel_consumption"]);

    if (is_numeric($fuel_cost) && is_numeric($distance) && is_numeric($fuel_consumption)) {
        $total_cost = ($distance / 100) * $fuel_consumption * $fuel_cost;
        echo "Koszt przejazdu wynosi: $total_cost zł";
    } else {
        echo "Błąd. Wprowadź poprawne liczby.";
    }
}
?>

</body>
</html>