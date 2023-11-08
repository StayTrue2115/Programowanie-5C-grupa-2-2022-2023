<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Walut</title>
<body>
    <h1>Kalkulator Walut</h1>

    <form method="post">
        Kwota w złotych: <input type="text" name="kwota">
        <br>

        Wybierz walutę:
        <select name="waluta">
            <option value="euro">Euro</option>
            <option value="dolary">Dolary</option>
            <option value="franki">Franki</option>
        </select>
        <br>

        <input type="submit" value="Przelicz">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $kwota = $_POST["kwota"];
        $waluta = $_POST["waluta"];
        
       
        $kurs_euro = 4.32;
        $kurs_dolara = 3.20;
        $kurs_franka = 3.98;

        
        if ($waluta == "euro") {
            $wynik = $kwota / $kurs_euro;
            echo "Kwota w Euro: " . $wynik;
        } elseif ($waluta == "dolary") {
            $wynik = $kwota / $kurs_dolara;
            echo "Kwota w Dolarach: " . $wynik;
        } elseif ($waluta == "franki") {
            $wynik = $kwota / $kurs_franka;
            echo "Kwota we Frankach: " . $wynik;
        }
    }
    ?>

</body>
</html>