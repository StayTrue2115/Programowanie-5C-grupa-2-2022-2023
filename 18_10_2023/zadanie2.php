<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wyszukaj tabele</title>
</head>
<body>
<form method="post">
    <h1>Podaj ID tabeli </a></h1>
    <input type="number" name="id">
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

    $sql = "SELECT * FROM pogoda WHERE ID=$id";

    if ($r = mysqli_query($polaczenie, $sql)) {
      if(mysqli_num_rows($r)>0){
        $row = mysqli_fetch_row($r);
        echo "<p>ID: $row[0]</p>";
        echo "<p>IDMIASTA: $row[1]</p>";
        echo "<p>DATA: $row[2]</p>";
        echo "<p>TEMPERATURAW NOCY: $row[3]</p>";
        echo "<p>TEMPERATURA W DZIEN: $row[4]</p>";
        echo "<p>OPADY: $row[5]</p>";
        echo "<p>CIsNENIE: $row[6]</p>";
      }else{
        echo "Nie ma takiego rekordu w bazie";
      }
    } else {
      echo "Błąd: " . mysqli_error($polaczenie);
    }

    mysqli_close($polaczenie);
    }
    ?>
    </br></br>
    
    <a href="zad1.php">wyszukaj tabelę</a>
  </br>
    <a href="zad3.php">Usun tabelę</a>
  </br>
    <a href="zad4.php">Zaktualizuj tabelę</a>
</body>
</html>