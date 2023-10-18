<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dodawanie tabeli</title>
</head>
<body>
    <h1>Dodawanie wiersza do bazy:</h1>
    <form method="post">
        <p>idmiasta <a href="id_miasta.html"></p>
        <input type="number" name="miasto">
        <p>data prognozy</p>
        <input type="date" name="">
        <p>temperatura w nocy</p>
        <input type="number" name="temp_noc">
        <p>tempertura w dzień</p>
        <input type="number" name="tempdzien">
        <p>opady</p>
        <input type="number" name="opad">
        <p>ciśnienie</p>
        <input type="number" name="cis">
        <button type="submit">dodaj </buton>
    </form>


    <?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "prognoza";

    $polaczenie = mysqli_connect($host, $user, $pass, $db);

    if (!empty($_POST)){
        @$miasta = $_POST["miasta"];
        @$dsta = $_POST["data"];
        @$temper_noc = $_POST["temper_noc"];
        @$temper_dzien = $_POST["temper_dzien"];
        @$opady = $_POST["opady"];
        @$cisnieine = $_POST["cisnienie"];


    $sql = "INSERT INTO pogoda (miasta_id, data_prognozy, temperatura_noc, temperatura_dzien, opady, cisnienie) 
    VALUES ($miasta, '$data', $temper_noc, $temper_dzien, $opady, $cisnienie)";

    if (mysqli_query($polaczenie, $sql)) {
      echo "Tabela dodana pomyślnie";
    } else {
      echo "Błąd: " . mysqli_error($polaczenie);
    }

    mysqli_close($polaczenie);
    }
    ?>
    </br></br>
    
    <a href="zad2.php">Wyszukaj tabelę po id</a>
  </br>
    <a href="zad3.php">Usun tabelę</a>
  </br>
  <a href="zad4.php">Zaktualizuj tabelę</a>
</body>
</html>