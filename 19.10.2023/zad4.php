<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator kosztu dowozu pizzy</title>
</head>
<body>
    <form action="" method="post">
        <label for="distance">Odległość w km:</label>
        <input type="number" name="distance" id="distance" required><br>
        <label for="hot_delivery">Dostawa ciepła:</label>
        <input type="checkbox" name="hot_delivery" id="hot_delivery"><br>
        <input type="submit" value="Oblicz koszt">
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $distance = floatval($_POST["distance"]);
    $hot_delivery = isset($_POST["hot_delivery"]) ? true : false;

    $cost_per_km = 0.5; 
    if ($hot_delivery) {
        $cost_per_km *= 1.15; 
    }

    $total_cost = $distance * $cost_per_km;
    echo "Koszt dowozu pizzy : $total_cost zł";
}
?>
</body>
</html>