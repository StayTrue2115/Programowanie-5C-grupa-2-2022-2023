<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dodaj tabele</title>
</head>
<body>
    <h1>Aktualizowanie wiersza :</h1>
    <form method="post">
        <p>Podaj ID tabeli </p>
        <input type="number" name="id">
        <p>id miasta <a href="id_miasta.html"></a></p>
        <input type="number" name="miasta">
        <p>data prognozy</p>
        <input type="date" name="data">
        temperatura w nocy</p>
        <input type="number" name="temper_noc">
        <p>temperatura w dzień</p>
        <input type="number" name="temper_dzien">
        <p>opady</p>
        <input type="number" name="opady">
        <p>ciśnienie</p>
        <input type="number" name="cisnienie">
        <button type="submit">Wyślij</button>
    </form>

    <?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "prognoza";

    $polaczenie = mysqli_connect($host, $user, $pass, $db);

    if (!empty($_POST)){
        @$id = $_POST["id"];
        @$miasta = $_POST["miasto"];
        @$data  $_POST["data"];
        @$temper_noc = $_POST["temper_noc"];
        @$temper_dzien = $_POST["temper_dzien"];
        @$opady = $_POST["opad"];
        @$cisnienie = $_POST["cisnienie"];


    $sql = "UPDATE pogoda SET miasta_id=$miasta, data_prognozy=$data, temperatura_noc=$temper_noc, temperatura_dzien=$temper_dzien, opady=$opad, cisnienie=$cisnienie WHERE id=$id;";

    if (mysqli_query($polaczenie, $sql)) {
      echo "Tabela zaktualizowanae";
    } else {
      echo "Bląd: " . mysql_error($polaczenie);
    }

    mysqli_close($polaczenie);
    }
    ?>
    </br></br>

    <a href="zad1.php">Dodaj tabelę</a>
</br>
    <a href="zad2.php">Wyszukaj tabelę po ID</a>
  </br>
    <a href="zad3.php">Usuń tabelę</a>

</body>
</html>