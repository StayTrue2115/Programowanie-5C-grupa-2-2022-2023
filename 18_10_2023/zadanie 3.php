<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dodaj tabele</title>
</head>
<body>
    <h1>Usuwanie wiersza :</h1>
    <form method="post">
    <p>Podaj ID tabeli </a></p>
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


    $sql = "DELETE FROM pogoda WHERE id=$id";

    if (mysqli_query($polaczenie, $sql)) {
      echo "tabela usunięta ";
    } else {
      echo "Błąd: " . mysqli_error($polaczenie);
    }

    mysqli_close($polaczenie);
    }
    ?>
    </br></br>
    
    <a href="zad1.php">UsuN tabelę</a>
  </br>
    <a href="zad2.php">Wyszukaj tabelę po ID</a>
  </br>
  <a href="zad4.php">Zaktualizuj tabelę</a>
  
</body>
</html>